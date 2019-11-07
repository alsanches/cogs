@extends('dashboard.layouts.index')

@section('content')
<section class="content-header">
    <h1>
        Gerência de Procedimentos Odontológicos
        <small>Sistema {{env('APP_NAME')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="acrive">Gerência de Procedimentos Odontológicos</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('dashboard.layouts.form-error')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h3 class="box-title">Cadastro de Procedimentos Odontológicos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div align="left">
                    </div>
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <a href="{{route('procedures.index')}}" class="btn btn-primary"><span class=""></span>
                                Voltar</a>

                        </div>
                        <div class="box-body">

                            <form class="form" method="post" action="{{route('procedure.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="name">Nome</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{Request::old('name')}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="value" data-toggle="tooltip" data-placement="top">Valor base</label>
                                            <input type="number" class="form-control" id="value" name="value"
                                                value="{{Request::old('value')}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="collabValue" data-toggle="tooltip" data-placement="top">Valor Colaborador</label>
                                            <input type="number" class="form-control" id="collabValue" name="collabValue"
                                                value="{{Request::old('value')}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="obs">Observações</label>
                                            <textarea class="form-control" rows="2" name="obs" id="obs"
                                                placeholder="Observações sobre o Colaborador.">{{Request::old('obs')}}
                                            </textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="footer">
                                    <hr />
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection