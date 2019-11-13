<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProceduresValidation;
use Illuminate\Http\Request;

use App\Models\Procedure;

class ProcedureController extends Controller
{

    private $procedureModel;
    private $request;

    public function __construct(Procedure $procedureModel, Request $request)
    {
        $this->procedureModel = $procedureModel;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = $this->procedureModel->orderBy('name')->paginate(10);
        return view('dashboard.procedures.index', compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.procedures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProceduresValidation $request)
    {
        $procedure = $this->request->all();

        $procedure['user_id'] = auth()->user()->id;

        Procedure::create($procedure);

        /*  if($salvou) */
        return redirect(route('procedures.index'))
            ->with('success', 'Procedimento cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedure = Procedure::find($id);
        return view('dashboard.procedures.show', compact('procedure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedure = Procedure::find($id);

        return view('dashboard.procedures.edit', compact(['procedure', 'id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProceduresValidation $request, $id)
    {
        $procedure = $this->request->all();

        $procedure['user_id'] = auth()->user()->id;

        $this->procedureModel->find($id)->update($procedure);

        return redirect(route('procedures.index'))
            ->with('success', 'Procedimento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        return redirect(route('procedures.index'))
        ->with('success','O Procedimento '. $procedure->name . ' foi excluido com sucesso.');
    }
}
