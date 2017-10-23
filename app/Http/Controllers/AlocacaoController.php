<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlocacaoRequest;
use App\Http\Requests\UpdateAlocacaoRequest;
use App\Repositories\AlocacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AlocacaoController extends AppBaseController
{
    /** @var  AlocacaoRepository */
    private $alocacaoRepository;

    public function __construct(AlocacaoRepository $alocacaoRepo)
    {
        $this->alocacaoRepository = $alocacaoRepo;
    }

    /**
     * Display a listing of the Alocacao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->alocacaoRepository->pushCriteria(new RequestCriteria($request));
        $alocacaos = $this->alocacaoRepository->all();

        return view('alocacaos.index')
            ->with('alocacaos', $alocacaos);
    }

    /**
     * Show the form for creating a new Alocacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('alocacaos.create');
    }

    /**
     * Store a newly created Alocacao in storage.
     *
     * @param CreateAlocacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateAlocacaoRequest $request)
    {
        $input = $request->all();

        $alocacao = $this->alocacaoRepository->create($input);

        Flash::success('Alocacao saved successfully.');

        return redirect(route('alocacaos.index'));
    }

    /**
     * Display the specified Alocacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alocacao = $this->alocacaoRepository->findWithoutFail($id);

        if (empty($alocacao)) {
            Flash::error('Alocacao not found');

            return redirect(route('alocacaos.index'));
        }

        return view('alocacaos.show')->with('alocacao', $alocacao);
    }

    /**
     * Show the form for editing the specified Alocacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alocacao = $this->alocacaoRepository->findWithoutFail($id);

        if (empty($alocacao)) {
            Flash::error('Alocacao not found');

            return redirect(route('alocacaos.index'));
        }

        return view('alocacaos.edit')->with('alocacao', $alocacao);
    }

    /**
     * Update the specified Alocacao in storage.
     *
     * @param  int              $id
     * @param UpdateAlocacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlocacaoRequest $request)
    {
        $alocacao = $this->alocacaoRepository->findWithoutFail($id);

        if (empty($alocacao)) {
            Flash::error('Alocacao not found');

            return redirect(route('alocacaos.index'));
        }

        $alocacao = $this->alocacaoRepository->update($request->all(), $id);

        Flash::success('Alocacao updated successfully.');

        return redirect(route('alocacaos.index'));
    }

    /**
     * Remove the specified Alocacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alocacao = $this->alocacaoRepository->findWithoutFail($id);

        if (empty($alocacao)) {
            Flash::error('Alocacao not found');

            return redirect(route('alocacaos.index'));
        }

        $this->alocacaoRepository->delete($id);

        Flash::success('Alocacao deleted successfully.');

        return redirect(route('alocacaos.index'));
    }
}
