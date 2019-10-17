@extends('dashboard.layouts.index')

@section('content')
    <!-- Main content -->
    <section class="content-header">

        <h1>
            Dashboard
            <small>Sistema {{env('APP_NAME')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="acrive">Página principal</li>
        </ol>

    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        @inject('users','App\User' )
                        <h3>{{$users->count()}}</h3>

                        <p>Usuários</p>

                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="{{route('dashboard.users')}}" class="small-box-footer">Lista Completa<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </section>
@endsection
