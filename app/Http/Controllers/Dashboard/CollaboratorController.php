<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CollaboratorsValidation;
use App\Models\Collaborator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CollaboratorController extends Controller
{

    private $collaboratorModel;
    private $request;

    public function __construct(Collaborator $collaboratorModel, Request $request)
    {
        $this->collaboratorModel = $collaboratorModel;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = $this->collaboratorModel->orderBy('name')->paginate(10);
        $title = "Lista Colaboradores";
        return view('dashboard.collaborators.index', compact('collaborators','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar Colaborador";
        return view('dashboard.collaborators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CollaboratorsValidation $request)
    {
        /* $validator = Validator::make($request->all(), Collaborator::$rules, Collaborator::$messages ); */

       /*  if ($validator->fails()) {
            return redirect(route('collaborator.create'))
                ->withErrors($validator)
                ->withInput();
        } */

        $collaborator = $this->request->all();

        $collaborator['user_id'] = auth()->user()->id;

        Collaborator::create($collaborator);

       /*  if($salvou) */
            return redirect(route('collaborators.index'))
                ->with('success', 'Colaborador cadastrado com sucesso.');
        /* else
            return redirect(route('collaborator.create'))
                ->with('error', 'Erro ao cadastrar o Colaborador .'); */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
