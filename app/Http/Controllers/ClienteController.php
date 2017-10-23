<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Repositories\ClienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Image;
use Auth;
use App\User;
use App\Models\Cliente;

use Validator;

class ClienteController extends AppBaseController
{
    /** @var  ClienteRepository */
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the Cliente.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clienteRepository->pushCriteria(new RequestCriteria($request));
        $clientes = $this->clienteRepository->all();

        return view('clientes.index')
            ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new Cliente.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created Cliente in storage.
     *
     * @param CreateClienteRequest $request
     *
     * @return Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'nuit' => 'required|integer|min:6|max:7',
            'endereco' => 'required|string|max:255',
            

        ]);
    }
    public function store(CreateClienteRequest $request)
    {
        $input = $request->all();

        $use['name']=$input['name'];
        $use['password']=bcrypt($input['password']);
        $use['email']=$input['email'];
        $use['password_confirmation']=$input['password_confirmation'];

        $clie['nome']=$input['nome'];
        $clie['nuit']=$input['nuit'];
        $clie['telefone']=$input['telefone'];
        $clie['tipo_cliente']=$input['tipo_cliente'];
        $clie['endereco']=$input['endereco'];
       


        if($request->hasFile('foto')){
          $foto=$request->file('foto');
          $fileName=Time().'.'.$foto->getClientOriginalExtension();
          Image::make($foto)->resize(300,300)->save(public_path('/uplouds/cliente/').$fileName);
          Image::make($foto)->resize(300,300)->save(public_path('/uplouds/user/').$fileName);
          $clie['foto']=$fileName;

          $user_id=User::create([
            'name' => $use['name'],
            'email' => $use['email'],
            'password' => bcrypt($use['password']),
            'foto'=>$fileName,
        ]);

            $clie['users_id']=$user_id['id'];
            
          $cliente = $this->clienteRepository->create($clie);
          Flash::success('Cliente cadastrado com sucesso.');
       }

        return redirect(route('clientes.index'));
    }


    /**
     * Display the specified Cliente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified Cliente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

      $cliente = $this->clienteRepository->findWithoutFail($id);
      $user=User::find($cliente['users_id']);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

          return redirect(route('clientes.index'));
       }

     return view('clientes.edit')->with('cliente', $cliente)->with('user',$user);
    }

    /**
     * Update the specified Cliente in storage.
     *
     * @param  int              $id
     * @param UpdateClienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteRequest $request)
    {
        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $cliente = $this->clienteRepository->update($request->all(), $id);

        Flash::success('Cliente updated successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified Cliente from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $this->clienteRepository->delete($id);

        Flash::success('Cliente deleted successfully.');

        return redirect(route('clientes.index'));
    }
}
