@extends('dashboard.layouts.index')

@section('content')
<section class="content-header">
    <h1>
        Gerência de Procedimentos
        <small>Sistema {{env('APP_NAME')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="acrive">Gerência de Procedimento</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('dashboard.layouts.form-success')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h1 class="box-title"><strong> Detalhes do Procedimento </strong></h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Procedimento:</strong> {{$procedure->name}}
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group">
                            <strong>Valor Base:</strong>
                            {{$procedure->value == null ? " - " : number_format($procedure->value, 2, ',', '.')}}
        
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group">
                            <strong>Valor Colaborador:</strong>
                            {{$procedure->collabValue == null ? " - " : number_format($procedure->collabValue, 2, ',', '.')}}
        
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Obsevações: </strong> {{$procedure->obs == null ? "Procedimento não possui observações" : $procedure->obs}}
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group">
                            <strong>Usuário inclusão: </strong> {{$procedure->user->name}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <strong>Cadastrado em: </strong> {{$procedure->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
                <div class="box box-footer">
                        <hr/>
                        <a href="{{route('procedures.index')}}" class="btn btn-primary">Retornar</a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection