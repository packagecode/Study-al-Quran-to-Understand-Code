<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active"><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>
                    <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('slider.create')}}"><i class="fa fa-circle-o"></i> upload</a></li>
                    <li><a href="{{route('slider.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Publication</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('publication.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{route('publication.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Quran Class</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('quranclass.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{route('quranclass.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-video-o"></i>
                    <span>Live Class</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('liveclass.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{route('liveclass.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-video-o"></i>
                    <span>Important Link</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('implink.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{route('implink.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-video-o"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('gallery.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{route('gallery.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
            </li>
            <li class="active"><a href="{{route('users')}}"><i class="fa fa-user"></i>
                    <span>Users</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>