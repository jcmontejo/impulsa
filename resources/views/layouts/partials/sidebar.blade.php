<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?php 
        $id = Auth::user()->id;
        $profiles = DB::select('select * from profiles where user_id = ?', [$id]);
        $polls = DB::select('select * from polls where user_id = ?', [$id]);
        ?>
        
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
            <?php
            foreach($profiles as $profile):
            ?>
                <div class="pull-left image">
                    <img src="<?php echo url('/profiles', [$profile->image]); ?>" class="img-circle" alt="User Image" />
                </div>
            <?php
            endforeach
            ?>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Perfil</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Datos personales<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('/student/create')}}"><i class="fa fa-circle-o"></i> Llenar</a></li>
                    <li><a href="{{ url('/student')}}"><i class="fa fa-circle-o"></i> Ver</a></li>
                     @if (count($profiles) == 0)
                    <li><a href="{{ url('/profile/create')}}"><i class="fa fa-circle-o"></i> Agregar foto de perfil</a></li>
                    @endif
                    @if (count($polls) == 0)
                    <li><a href="{{ url('/poll/create')}}"><i class="fa fa-circle-o"></i>Llenar encuesta Impulsa</a></li>
                    @endif
                  </ul>
            </li>
            <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Datos academicos<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('/academic/create')}}"><i class="fa fa-circle-o"></i> Llenar</a></li>
                    <li><a href="{{ url('/academic')}}"><i class="fa fa-circle-o"></i> Ver</a></li>
                  </ul>
            </li>
            <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Datos laborales<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('/work/create')}}"><i class="fa fa-circle-o"></i> Llenar</a></li>
                    <li><a href="{{ url('/work')}}"><i class="fa fa-circle-o"></i> Ver</a></li>
                  </ul>
            </li>
          </ul>
        </li>
            <li><a href="{{url('/postulate')}}"><i class='fa fa-book'></i> <span>Mis postulaciones</span></a></li>
            <li>
                  <a href="#"><i class="fa fa-folder-o"></i> Curriculum<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('/curriculum')}}"><i class="fa fa-pencil-square"></i> Ver</a></li>
                    <li><a href="{{ url('/pdf')}}"><i class="fa fa-file-pdf-o"></i> Descargar en PDF</a></li>
                  </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
