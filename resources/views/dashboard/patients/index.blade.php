@extends('dashboard.layouts.index')

@section('content')
<section class="content-header">
    <h1>
        Gerência de Pacientes
        <small>Sistema {{env('APP_NAME')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="acrive">Gerência de Pacientes</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('dashboard.layouts.form-success')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h3 class="box-title">Pacientes do Sistema</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div align="left">
                        <a href="{{route('patient.create')}}" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Novo paciente</a>
                    </div>
                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark">
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col" class="text-center">Ações</th>
                        </thead>

                        <tbody>
                            @forelse ($patients as $patient)
                                <tr>

                                    <td>{{$patient->name}}</td>
                                    <td>{{substr($patient->cpf,0,3) . '.' . substr($patient->cpf,3,3) . '.' . substr($patient->cpf,6,3) . '-' .substr($patient->cpf,9,2)}}</td>
                                    
                                    <td class="text-center">
                                        <a href="{{route('patient.show', $patient->id)}}"
                                            class="btn btn-primary"><i class="fa fa-eye"></i></a> |
                                        <a href="{{route('patient.edit', $patient->id)}}"
                                            class="btn btn-warning"><i class="fa fa-pencil"></i></a> |
                                        <a href="{{route('patient.destroy', $patient->id)}}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                            <p> <strong> Nenhum Paciente foi cadastrado no sistema</strong></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection