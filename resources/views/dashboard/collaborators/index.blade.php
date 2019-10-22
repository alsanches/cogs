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
                    <h3 class="box-title">Colaboradores do Sistema</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div align="left">
                        <a href="{{route('collaborator.create')}}" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Novo Colaborador</a>
                    </div>
                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark">
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Forma Pgto</th>
                            <th scope="col">% 1ª Parcela</th>
                            <th scope="col" class="text-center">Email</th>
                            <!--th scope="col">Percentual</th-->
                            <th scope="col" class="text-center">Ações</th>
                        </thead>

                        <tbody>
                            @forelse ($collaborators as $collaborator)
                            <tr>

                                <td>{{$collaborator->name}}</td>
                                <td>{{$collaborator->surname}}</td>
                                <td>{{$collaborator->percent == 0 ? " Valor Fixo " : number_format($collaborator->percent, 2, ',', '.')}}
                                    {{$collaborator->percent == 0 ? " " : "%"}}
                                </td>

                                <td>{{$collaborator->parcelPercent == 0 ? " 6x iguais " : number_format($collaborator->parcelPercent, 2, ',', '.')}}
                                    {{$collaborator->parcelPercent == 0 ? " " : "%"}}
                                </td>

                                <td>{{$collaborator->email}}</td>

                                <td class="text-center">
                                    <a href="{{route('collaborator.show', $collaborator->id)}}"
                                        class="btn btn-primary"><i class="fa fa-eye"></i></a> |
                                    <a href="{{route('collaborator.edit', $collaborator->id)}}"
                                        class="btn btn-warning"><i class="fa fa-pencil"></i></a> |
                                    <a href="{{route('collaborator.destroy', $collaborator->id)}}"
                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                            @empty
                            <p>Nenhum colaborador cadastrado</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection