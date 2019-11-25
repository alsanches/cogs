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
                    <h1 class="box-title"><strong> Detalhes do Paciente </strong></h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Nome do Paciente:</strong> {{$patient->name}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>CPF:</strong>
                            <td>{{substr($patient->cpf,0,3) . '.' . substr($patient->cpf,3,3) . '.' . substr($patient->cpf,6,3) . '-' .substr($patient->cpf,9,2)}}
                            </td>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Obsevações: </strong>
                            {{$patient->obs == null ? "Paciente não possui observações" : $patient->obs}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Usuário inclusão: </strong> {{$patient->user->name}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Cadastrado em: </strong> {{$patient->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
                <div class="box box-footer">
                    <hr />
                    <a href="{{route('patients.index')}}" class="btn btn-primary">Retornar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection