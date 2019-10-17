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
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h3 class="box-title">Colaboradores do Sistema</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cadastrado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($collaborators as $collaborator)
                            <tr>
                                <td>{{$collaborator->name}}</td>
                                <td>{{$collaborator->email}}</td>
                                <td>{{$collaborator->created_at->diffForHumans()}}</td>
                            </tr>
                            @empty
                                Nenhum Usuário cadastrado !
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cadastrado em</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection