<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientsValidation;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PatientController extends Controller
{
    private $patientModel;
    private $request;

    public function __construct(Patient $patientModel, Request $request)
    {
        $this->patientModel = $patientModel;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = $this->patientModel->orderBy('name')->paginate(10);
        $title = "Lista Pacientes";
        return view('dashboard.patients.index', compact('patients', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar Paciente";
        return view('dashboard.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientsValidation $request)
    {
        $patient = $this->request->all();

        $patient['user_id'] = auth()->user()->id;

        Patient::create($patient);

        return redirect(route('patients.index'))
            ->with('success', 'Paciente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('dashboard.patients.show', compact(['patient']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('dashboard.patients.edit', compact(['patient','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientsValidation $request, $id)
    {
        $patient = $this->request->all();

        $patient['user_id'] = auth()->user()->id;

       $this->patientModel->find($id)->update($patient);

       
       return redirect(route('patients.index'))
            ->with('success', 'Dados do paciente atualizados com sucesso.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);

        $patient->delete();

        return redirect(route('patients.index'))
                ->with('success', 'O paciente ' . $patient->name .
                ' foi excluido com sucesso.');
    }
}
