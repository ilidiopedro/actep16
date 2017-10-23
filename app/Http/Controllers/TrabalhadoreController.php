<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabalhadoreRequest;
use App\Http\Requests\UpdateTrabalhadoreRequest;
use App\Repositories\TrabalhadoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use Image;

class TrabalhadoreController extends AppBaseController
{
    /** @var  TrabalhadoreRepository */
    private $trabalhadoreRepository;

    public function __construct(TrabalhadoreRepository $trabalhadoreRepo)
    {
        $this->trabalhadoreRepository = $trabalhadoreRepo;
    }

    /**
     * Display a listing of the Trabalhadore.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabalhadoreRepository->pushCriteria(new RequestCriteria($request));
        $trabalhadores = $this->trabalhadoreRepository->all();

        return view('trabalhadores.index')
            ->with('trabalhadores', $trabalhadores);
    }

    /**
     * Show the form for creating a new Trabalhadore.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabalhadores.create');
    }

    /**
     * Store a newly created Trabalhadore in storage.
     *
     * @param CreateTrabalhadoreRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabalhadoreRequest $request)
    {
        $input = $request->all();

        $use['name']=$input['name'];
        $use['password']=bcrypt($input['password']);
        $use['email']=$input['email'];
        $use['password_confirmation']=$input['password_confirmation'];


        $trabalhador['nome']=$input['nome'];
        $trabalhador['sexo']=$input['sexo'];
        $trabalhador['telefone']=$input['telefone'];
        $trabalhador['data_nascimento']=$input['data_nascimento'];
        $trabalhador['endereco']=$input['endereco'];


        if($request->hasFile('foto')){
          $foto=$request->file('foto');
          $fileName=Time().'.'.$foto->getClientOriginalExtension();
          Image::make($foto)->resize(300,300)->save(public_path('/uplouds/employee/').$fileName);
          Image::make($foto)->resize(300,300)->save(public_path('/uplouds/user/').$fileName);
          $trabalhador['foto']=$fileName;

          $user_id=User::create([
            'name' => $use['name'],
            'email' => $use['email'],
            'password' => bcrypt($use['password']),
            'foto'=>$fileName,
        ]);

            $trabalhador['users_id']=$user_id['id'];
            
          $trabalhadore = $this->trabalhadoreRepository->create($trabalhador);
          Flash::success('Trabalhador cadastrado com sucesso.');
       }

      

       // $trabalhadore = $this->trabalhadoreRepository->create($trabalhador);


       // Flash::success('Trabalhadore saved successfully.');

        return redirect(route('trabalhadores.index'));
    }

    /**
     * Display the specified Trabalhadore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabalhadore = $this->trabalhadoreRepository->findWithoutFail($id);

        if (empty($trabalhadore)) {
            Flash::error('Trabalhadore not found');

            return redirect(route('trabalhadores.index'));
        }

        return view('trabalhadores.show')->with('trabalhadore', $trabalhadore);
    }

    /**
     * Show the form for editing the specified Trabalhadore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabalhadore = $this->trabalhadoreRepository->findWithoutFail($id);

        if (empty($trabalhadore)) {
            Flash::error('Trabalhadore not found');

            return redirect(route('trabalhadores.index'));
        }

        return view('trabalhadores.edit')->with('trabalhadore', $trabalhadore);
    }

    /**
     * Update the specified Trabalhadore in storage.
     *
     * @param  int              $id
     * @param UpdateTrabalhadoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabalhadoreRequest $request)
    {
        $trabalhadore = $this->trabalhadoreRepository->findWithoutFail($id);

        if (empty($trabalhadore)) {
            Flash::error('Trabalhadore not found');

            return redirect(route('trabalhadores.index'));
        }

        $trabalhadore = $this->trabalhadoreRepository->update($request->all(), $id);

        Flash::success('Trabalhadore updated successfully.');

        return redirect(route('trabalhadores.index'));
    }

    /**
     * Remove the specified Trabalhadore from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabalhadore = $this->trabalhadoreRepository->findWithoutFail($id);

        if (empty($trabalhadore)) {
            Flash::error('Trabalhadore not found');

            return redirect(route('trabalhadores.index'));
        }

        $this->trabalhadoreRepository->delete($id);

        Flash::success('Trabalhadore deleted successfully.');

        return redirect(route('trabalhadores.index'));
    }
}
