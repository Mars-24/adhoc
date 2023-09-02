<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
        <img src="{{ asset('frontend/images/logo.png') }}" alt=" Nirvana Logo" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight-light">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            @php
            $name =auth('admin')->user()->fullname;
            $id = auth('admin')->user()->id;

            @endphp
            <div class="info">
               
                <a href="{{ route('credentialPage',$id) }}" class="d-block">{{ $name }} </a>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu Super Utilisateur
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon fas fa-sms"></i>
                        <p>
                            Gestion Messages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('message.index') }}" class="nav-link">
                                Liste Messages
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon fas fa-archive"></i>
                        <p>
                            Gestion du Portfolio
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}" class="nav-link">
                                Liste Images
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('portfolio.create')}}" class="nav-link">
                                Ajouter Images
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
