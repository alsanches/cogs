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
                    <h2 class="box-title">Dados do colaborador</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <form class="form" method="post" action="{{route('collaborator.update', $collaborator->id)}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{$collaborator->name}}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="surname">Sobrenome</label>
                                    <input type="text" class="form-control" id="surname" name="surname"
                                        value="{{$collaborator->surname}}">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="percent" data-toggle="tooltip" data-placement="top">
                                        % Procedim.
                                        <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"
                                            data-toggle="tooltip" data-placement="top"
                                            title="Digite 0 (zero) se o Colaborador receber por procedimento">
                                        </i>
                                    </label>
                                    <input type="number" class="form-control" id="percent" name="percent"
                                        value="{{$collaborator->percent}}">
                                </div>

                                <div class="form-group col-md-1">
                                    <label for="parcelPercent">% da 1ª Parcela</label>
                                    <input type="number" class="form-control" id="parcelPercent" name="parcelPercent"
                                        value="{{$collaborator->parcelPercent}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{$collaborator->email}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="obs">Observações</label>
                                    <textarea class="form-control" rows="2" name="obs" id="obs"
                                        placeholder="Observações sobre o Colaborador.">{{$collaborator->obs}}
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