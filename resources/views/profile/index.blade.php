@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<section class="content-header">
      <h1>
        Impulsa
        <small>bolsa de trabajo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel Alumno</li>
      </ol>
    </section>
        <!-- Main content -->
    <section class="content">
      @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('alerts.success')

      <hr>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
           <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Perfil de Usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="row">
              <div class="col-md-3"></div>
               <div class="col-md-6">

          <!-- Profile Image -->
          <?php 
            $id = Auth::user()->id;
            $users = DB::select('select * from users where id = ?', [$id]);
           ?>
          @foreach($profiles as $profile)
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo url('/profiles', [$profile->image]); ?>" alt="User profile picture">
              @foreach ($users as $user)
              <h3 class="profile-username text-center">{{ $user->name }} {{ $user->last_name }}</h3>

              <p class="text-muted text-center">{{ $user->email }}</p>
              @endforeach
              <!--<ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>-->

              <!--<a href="#" class="btn btn-primary btn-block"><b>Editar foto de perfil</b></a>-->
              <!--{{ link_to_route('profile.edit', $title = 'Editar foto de perfil', $parameter = $profile, $attributes = ['class' => 'btn btn-primary btn-block']) }}-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          @endforeach
            </div>
          </div>
          <!-- /.box -->

        </div>
      </div>
      

         
@endsection
