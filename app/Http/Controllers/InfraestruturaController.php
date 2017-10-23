<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfraestruturaRequest;
use App\Http\Requests\UpdateInfraestruturaRequest;
use App\Repositories\InfraestruturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Cliente;

class InfraestruturaController extends AppBaseController
{
    /** @var  InfraestruturaRepository */
    private $infraestruturaRepository;

    public function __construct(InfraestruturaRepository $infraestruturaRepo)
    {
        $this->infraestruturaRepository = $infraestruturaRepo;
    }

    /**
     * Display a listing of the Infraestrutura.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->infraestruturaRepository->pushCriteria(new RequestCriteria($request));
        $infraestruturas = $this->infraestruturaRepository->all();

        return view('infraestruturas.index')
            ->with('infraestruturas', $infraestruturas);
    }

    /**
     * Show the form for creating a new Infraestrutura.
     *
     * @return Response
     */
    public function create()
    {
        $cliente=Cliente::All();
        return view('infraestruturas.create')->with('cliente',$cliente);
    }

    /**
     * Store a newly created Infraestrutura in storage.
     *
     * @param CreateInfraestruturaRequest $request
     *
     * @return Response
     */
    public function store(CreateInfraestruturaRequest $request)
    {
        $input = $request->all();

        $infraestrutura = $this->infraestruturaRepository->create($input);

        Flash::success('Infraestrutura saved successfully.');

        return redirect(route('infraestruturas.index'));
    }

    /**
     * Display the specified Infraestrutura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infraestrutura = $this->infraestruturaRepository->findWithoutFail($id);

        if (empty($infraestrutura)) {
            Flash::error('Infraestrutura not found');

            return redirect(route('infraestruturas.index'));
        }

        return view('infraestruturas.show')->with('infraestrutura', $infraestrutura);
    }

    /**
     * Show the form for editing the specified Infraestrutura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infraestrutura = $this->infraestruturaRepository->findWithoutFail($id);

        if (empty($infraestrutura)) {
            Flash::error('Infraestrutura not found');

            return redirect(route('infraestruturas.index'));
        }

        return view('infraestruturas.edit')->with('infraestrutura', $infraestrutura);
    }

    /**
     * Update the specified Infraestrutura in storage.
     *
     * @param  int              $id
     * @param UpdateInfraestruturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfraestruturaRequest $request)
    {
        $infraestrutura = $this->infraestruturaRepository->findWithoutFail($id);

        if (empty($infraestrutura)) {
            Flash::error('Infraestrutura not found');

            return redirect(route('infraestruturas.index'));
        }

        $infraestrutura = $this->infraestruturaRepository->update($request->all(), $id);

        Flash::success('Infraestrutura updated successfully.');

        return redirect(route('infraestruturas.index'));
    }

    /**
     * Remove the specified Infraestrutura from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infraestrutura = $this->infraestruturaRepository->findWithoutFail($id);

        if (empty($infraestrutura)) {
            Flash::error('Infraestrutura not found');

            return redirect(route('infraestruturas.index'));
        }

        $this->infraestruturaRepository->delete($id);

        Flash::success('Infraestrutura deleted successfully.');

        return redirect(route('infraestruturas.index'));
    }
}
