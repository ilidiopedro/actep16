<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectoRequest;
use App\Http\Requests\UpdateProjectoRequest;
use App\Repositories\ProjectoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProjectoController extends AppBaseController
{
    /** @var  ProjectoRepository */
    private $projectoRepository;

    public function __construct(ProjectoRepository $projectoRepo)
    {
        $this->projectoRepository = $projectoRepo;
    }

    /**
     * Display a listing of the Projecto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectoRepository->pushCriteria(new RequestCriteria($request));
        $projectos = $this->projectoRepository->all();

        return view('projectos.index')
            ->with('projectos', $projectos);
    }

    /**
     * Show the form for creating a new Projecto.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectos.create');
    }

    /**
     * Store a newly created Projecto in storage.
     *
     * @param CreateProjectoRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectoRequest $request)
    {
        $input = $request->all();

        $projecto = $this->projectoRepository->create($input);

        Flash::success('Projecto saved successfully.');

        return redirect(route('projectos.index'));
    }

    /**
     * Display the specified Projecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projecto = $this->projectoRepository->findWithoutFail($id);

        if (empty($projecto)) {
            Flash::error('Projecto not found');

            return redirect(route('projectos.index'));
        }

        return view('projectos.show')->with('projecto', $projecto);
    }

    /**
     * Show the form for editing the specified Projecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projecto = $this->projectoRepository->findWithoutFail($id);

        if (empty($projecto)) {
            Flash::error('Projecto not found');

            return redirect(route('projectos.index'));
        }

        return view('projectos.edit')->with('projecto', $projecto);
    }

    /**
     * Update the specified Projecto in storage.
     *
     * @param  int              $id
     * @param UpdateProjectoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectoRequest $request)
    {
        $projecto = $this->projectoRepository->findWithoutFail($id);

        if (empty($projecto)) {
            Flash::error('Projecto not found');

            return redirect(route('projectos.index'));
        }

        $projecto = $this->projectoRepository->update($request->all(), $id);

        Flash::success('Projecto updated successfully.');

        return redirect(route('projectos.index'));
    }

    /**
     * Remove the specified Projecto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projecto = $this->projectoRepository->findWithoutFail($id);

        if (empty($projecto)) {
            Flash::error('Projecto not found');

            return redirect(route('projectos.index'));
        }

        $this->projectoRepository->delete($id);

        Flash::success('Projecto deleted successfully.');

        return redirect(route('projectos.index'));
    }
}
