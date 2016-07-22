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
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Activo</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Búscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <li class="active"><a href="{{ url('homecompany') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
                <li class="treeview">
                 @if (count($profiles) == 0)
            <a href="{{ url('/profile-admin/create')}}">
            <i class="fa fa-file-image-o"></i>
            <span>Agregar foto de perfil  </span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            @endif
          
                <a href=""><i class='fa fa-user'></i> <span>Mi Perfil</span> <i class="fa  fa-angle-left"></i></a>
                <ul class="treeview-menu">                    
                    <li><a href="{{ url('company/create') }}"><i class='fa fa-circle-o'></i>Registro de la Empresa</a></li>    
                    <li><a href="{{ url('company') }}"><i class='fa fa-circle-o'></i>Datos de la Empresa</a></li>
                    <li><a href="{{ url('/convenio') }}"><i class='fa fa-circle-o'></i>Imprimir Convenio</a></li>                 
                </ul>
            </li>

             <li class="treeview">
                <a href=""><i class='fa fa-newspaper-o'></i> <span>Publicaciones</span> <i class="fa  f fa-angle-left"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('publication/create') }}"><i class='fa fa-circle-o'></i>Realizar una Publicación</a></li>
                    <li><a href="{{ url('publication') }}"><i class='fa fa-circle-o'></i>Historial de Publicaciones</a></li>                  
                </ul>
            </li>            
            
             <li class="treeview">
                <a href=""><i class='fa fa-check-square'></i> <span>Encuesta de Calidad</span> <i class="fa   fa-angle-left"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('quality/create') }}"><i class='fa fa-circle-o'></i>Realizar Encuesta</a></li>
                    <li><a href="{{ url('quality') }}"><i class='fa fa-circle-o'></i>Historial</a></li>                  
                </ul>
            </li>    
             <li class="treeview">
                <a href=""><i class='fa fa-link'></i> <span>Inserciones</span> <i class="fa   fa-angle-left"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('notification/create') }}"><i class='fa fa-circle-o'></i>Realizar Carta de Inserción</a></li>
                    <li><a href="{{ url('notification') }}"><i class='fa fa-circle-o'></i>Historial de Inserciones</a></li>
                    <li><a href="{{ url('vacancy') }}"><i class='fa fa-circle-o'></i>Imprimir Carta</a></li>                  
                </ul>
            </li> 
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
