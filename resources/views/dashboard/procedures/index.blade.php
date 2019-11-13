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
            @include('dashboard.layouts.form-success')
            <div class="box">
                <!-- .box-header -->
                <div class="box-header">
                    <h3 class="box-title">Procedimentos Odontológicos do Sistema</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div align="left">
                        <a href="{{route('procedure.create')}}" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Novo procedimento</a>
                    </div>
                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark">
                            <th scope="col">Nome</th>
                            <th scope="col">Valor de tabela</th>
                            <th scope="col">Valor Fixo Colaborador</th>
                            <th scope="col">% Pgto</th>
                            <th scope="col" class="text-center">Ações</th>
                        </thead>

                        <tbody>
                            @forelse ($procedures as $procedure)
                            <tr>

                                <td>{{$procedure->name}}</td>
                                <td>{{number_format($procedure->value, 2, ',', '.')}}</td>
                                <td>{{number_format($procedure->collabValue, 2, ',', '.')}}</td>
                                <td>{{number_format(($procedure->collabValue / $procedure->value)*100, 2, ',', '.') . ' %'}}</td>
                                <td class="text-center">
                                    <a href="{{route('procedure.show', $procedure->id)}}"
                                        class="btn btn-primary"><i class="fa fa-eye"></i></a> |
                                    <a href="{{route('procedure.edit', $procedure->id)}}"
                                        class="btn btn-warning"><i class="fa fa-pencil"></i></a> |
                                    <a href="{{route('procedure.destroy', $procedure->id)}}"
                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <p> <strong> Procedimento Odontológico cadastrado </strong></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection