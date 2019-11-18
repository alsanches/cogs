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
            <div class="small-box bg-aqua">
                <div class="inner">
                    @inject('users','App\User' )
                    <h3>{{$users->count()}}</h3>

                    <p>Usuários</p>

                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{route('dashboard.users')}}" class="small-box-footer">Lista Completa 
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <!-- Small boxes (Stat box) -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    @inject('collaborators','App\Models\Collaborator')
                    <h3>{{$collaborators->count()}}</h3>

                    <p>Colaboradores</p>

                </div>
                <div class="icon">
                    <i class="fa fa-address-card"></i>
                </div>
                <a href="{{route('collaborators.index')}}" class="small-box-footer">Lista Completa 
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->


        <!-- Small boxes (Stat box) -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    @inject('procedures','App\Models\Procedure')
                    <h3>{{$procedures->count()}}</h3>

                    <p>Procedimentos</p>

                </div>
                <div class="icon">
                    <i class="fa fa-address-card"></i>
                </div>
                <a href="{{route('procedures.index')}}" class="small-box-footer">Lista Completa 
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->




        <!-- Small boxes (Stat box) -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    @inject('patients','App\Models\Patient')
                    <h3>{{$patients->count()}}</h3>

                    <p>Pacientes</p>

                </div>
                <div class="icon">
                    <i class="fa fa-address-card"></i>
                </div>
                <a href="{{route('patients.index')}}" class="small-box-footer">Lista Completa 
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>
@endsection