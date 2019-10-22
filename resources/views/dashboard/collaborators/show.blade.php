@extends('dashboard.layouts.index')

@section('content')
<section class="content-header">
    <h1>
        Gerência de Colaboradores
        <small>Sistema {{env('APP_NAME')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="acrive">Gerência de Colaboradores</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('dashboard.layouts.form-success')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h2 class="box-title">Dados do colaborador</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Nome completo:</strong> {{$collaborator->name}} {{$collaborator->surname}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">

                            <strong>E-mail: </strong> {{$collaborator->email}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">

                            <strong>Forma Pgto.:</strong>
                            {{$collaborator->percent == null ? " Valor Fixo " : number_format($collaborator->percent, 2, ',', '.')}}
                            {{$collaborator->percent == null ? " " : "%"}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">

                            <strong>Parcelamento:</strong>
                            {{$collaborator->parcelPercent == null ? " 6x iguais " : number_format($collaborator->parcelPercent, 2, ',', '.')}}
                            {{$collaborator->parcelPercent == null ? " " : "% na primeira, demais " . number_format(((100-$collaborator->parcelPercent)/5), 2, ',','.') . "%"}}
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group">

                            <strong>Obsevações: </strong>
                            {{$collaborator->obs == null ? "Colaborador não possui observações" : $collaborator->obs}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">

                            <strong>Usuário inclusão: </strong> {{$collaborator->user->name}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Cadastrado em: </strong> {{$collaborator->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
                <div class="box box-footer">
                        <hr/>
                        <a href="{{route('collaborators.index')}}" class="btn btn-primary">Retornar</a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection