<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?php 
        $id = Auth::user()->id;
        $profiles = DB::select('select * from profiles where user_id = ?', [$id]);
          
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
            <li class="active"><a href="{{ url('/admin') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
            @if (count($profiles) == 0)
            <a href="{{ url('/profile-admin/create')}}">
            <i class="fa fa-file-image-o"></i>
            <span>Agregar foto de perfil  </span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            @endif
            <li>
                  <a href="{{ url('/confirm')}}"><i class="fa fa-child"></i> Activar cuentas<i class="fa fa-angle-left pull-right"></i></a>
            </li>
            <li>
                  <a href="#"><i class="fa fa-file-text"></i> Listar usuarios<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('/view-student')}}"><i class="fa fa-circle-o"></i> Alumnos</a></li>
                    <li><a href="{{ url('/view-company')}}"><i class="fa fa-circle-o"></i> Empresas</a></li>
                  </ul>
            </li>
          
        </li>
            <li><a href="#"><i class='fa fa-check'></i> <span>Evaluación</span></a>
        </li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
