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
            @include('dashboard.layouts.form-error')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h3 class="box-title">Cadastro de Colaborador</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div align="left">
                    </div>
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <a href="{{route('collaborators.index')}}" class="btn btn-primary"><span class=""></span>
                                Voltar</a>

                        </div>
                        <div class="box-body">

                            <form class="form" method="post" action="{{route('collaborator.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="name">Nome</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{Request::old('name')}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="surname">Sobrenome</label>
                                            <input type="text" class="form-control" id="surname" name="surname"
                                                value="{{Request::old('surname')}}">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <label for="percent" data-toggle="tooltip" data-placement="top">
                                                % Procedim.
                                                <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Digite 0 (zero) se o Colaborador receber por procedimento"></i>
                                            </label>
                                            <input type="number" class="form-control" id="percent" name="percent"
                                                value="{{Request::old('percent')}}">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <label for="parcelPercent">% da 1ª Parcela</label>
                                            <input type="number" class="form-control" id="parcelPercent"
                                                name="parcelPercent" value="{{Request::old('parcelPercent')}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{Request::old('email')}}">
                                        </div>

                                        <div class="form-group col-md-3">
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