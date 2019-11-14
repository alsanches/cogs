@extends('dashboard.layouts.index')

@section('content')
<section class="content-header">
    <h1>
        Gerência de Procedimentos
        <small>Sistema {{env('APP_NAME')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="acrive">Gerência de Procedimentos</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('dashboard.layouts.form-error')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h2 class="box-title">Dados do Procedimento</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <form class="form" method="post" action="{{route('procedure.update', $procedure->id)}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                    value="{{$procedure->name}}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="value" data-toggle="tooltip" data-placement="top">Valor base</label>
                                    <input type="number" class="form-control" id="value" name="value"
                                    value="{{$procedure->value}}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="collabValue" data-toggle="tooltip" data-placement="top">Valor Colaborador</label>
                                    <input type="number" class="form-control" id="collabValue" name="collabValue"
                                    value="{{$procedure->collabValue}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="obs">Observações</label>
                                    <textarea class="form-control" rows="2" name="obs" id="obs"
                                        placeholder="Observações sobre o Colaborador.">{{$procedure->obs}}
                                    </textarea>
                                </div>

                            </div>
                        </div>

                        <div class="footer">
                            <hr />
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
</section>
@endsection