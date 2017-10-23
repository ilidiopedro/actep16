<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItenRequest;
use App\Http\Requests\UpdateItenRequest;
use App\Repositories\ItenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ItenController extends AppBaseController
{
    /** @var  ItenRepository */
    private $itenRepository;

    public function __construct(ItenRepository $itenRepo)
    {
        $this->itenRepository = $itenRepo;
    }

    /**
     * Display a listing of the Iten.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itenRepository->pushCriteria(new RequestCriteria($request));
        $itens = $this->itenRepository->all();

        return view('itens.index')
            ->with('itens', $itens);
    }

    /**
     * Show the form for creating a new Iten.
     *
     * @return Response
     */
    public function create()
    {
        return view('itens.create');
    }

    /**
     * Store a newly created Iten in storage.
     *
     * @param CreateItenRequest $request
     *
     * @return Response
     */
    public function store(CreateItenRequest $request)
    {
        $input = $request->all();

        $iten = $this->itenRepository->create($input);

        Flash::success('Iten saved successfully.');

        return redirect(route('itens.index'));
    }

    /**
     * Display the specified Iten.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $iten = $this->itenRepository->findWithoutFail($id);

        if (empty($iten)) {
            Flash::error('Iten not found');

            return redirect(route('itens.index'));
        }

        return view('itens.show')->with('iten', $iten);
    }

    /**
     * Show the form for editing the specified Iten.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $iten = $this->itenRepository->findWithoutFail($id);

        if (empty($iten)) {
            Flash::error('Iten not found');

            return redirect(route('itens.index'));
        }

        return view('itens.edit')->with('iten', $iten);
    }

    /**
     * Update the specified Iten in storage.
     *
     * @param  int              $id
     * @param UpdateItenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItenRequest $request)
    {
        $iten = $this->itenRepository->findWithoutFail($id);

        if (empty($iten)) {
            Flash::error('Iten not found');

            return redirect(route('itens.index'));
        }

        $iten = $this->itenRepository->update($request->all(), $id);

        Flash::success('Iten updated successfully.');

        return redirect(route('itens.index'));
    }

    /**
     * Remove the specified Iten from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $iten = $this->itenRepository->findWithoutFail($id);

        if (empty($iten)) {
            Flash::error('Iten not found');

            return redirect(route('itens.index'));
        }

        $this->itenRepository->delete($id);

        Flash::success('Iten deleted successfully.');

        return redirect(route('itens.index'));
    }
}
