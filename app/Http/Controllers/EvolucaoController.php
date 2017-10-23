<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvolucaoRequest;
use App\Http\Requests\UpdateEvolucaoRequest;
use App\Repositories\EvolucaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EvolucaoController extends AppBaseController
{
    /** @var  EvolucaoRepository */
    private $evolucaoRepository;

    public function __construct(EvolucaoRepository $evolucaoRepo)
    {
        $this->evolucaoRepository = $evolucaoRepo;
    }

    /**
     * Display a listing of the Evolucao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->evolucaoRepository->pushCriteria(new RequestCriteria($request));
        $evolucaos = $this->evolucaoRepository->all();

        return view('evolucaos.index')
            ->with('evolucaos', $evolucaos);
    }

    /**
     * Show the form for creating a new Evolucao.
     *
     * @return Response
     */
    public function create()
    {
        return view('evolucaos.create');
    }

    /**
     * Store a newly created Evolucao in storage.
     *
     * @param CreateEvolucaoRequest $request
     *
     * @return Response
     */
    public function store(CreateEvolucaoRequest $request)
    {
        $input = $request->all();

        $evolucao = $this->evolucaoRepository->create($input);

        Flash::success('Evolucao saved successfully.');

        return redirect(route('evolucaos.index'));
    }

    /**
     * Display the specified Evolucao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evolucao = $this->evolucaoRepository->findWithoutFail($id);

        if (empty($evolucao)) {
            Flash::error('Evolucao not found');

            return redirect(route('evolucaos.index'));
        }

        return view('evolucaos.show')->with('evolucao', $evolucao);
    }

    /**
     * Show the form for editing the specified Evolucao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evolucao = $this->evolucaoRepository->findWithoutFail($id);

        if (empty($evolucao)) {
            Flash::error('Evolucao not found');

            return redirect(route('evolucaos.index'));
        }

        return view('evolucaos.edit')->with('evolucao', $evolucao);
    }

    /**
     * Update the specified Evolucao in storage.
     *
     * @param  int              $id
     * @param UpdateEvolucaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvolucaoRequest $request)
    {
        $evolucao = $this->evolucaoRepository->findWithoutFail($id);

        if (empty($evolucao)) {
            Flash::error('Evolucao not found');

            return redirect(route('evolucaos.index'));
        }

        $evolucao = $this->evolucaoRepository->update($request->all(), $id);

        Flash::success('Evolucao updated successfully.');

        return redirect(route('evolucaos.index'));
    }

    /**
     * Remove the specified Evolucao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evolucao = $this->evolucaoRepository->findWithoutFail($id);

        if (empty($evolucao)) {
            Flash::error('Evolucao not found');

            return redirect(route('evolucaos.index'));
        }

        $this->evolucaoRepository->delete($id);

        Flash::success('Evolucao deleted successfully.');

        return redirect(route('evolucaos.index'));
    }
}
