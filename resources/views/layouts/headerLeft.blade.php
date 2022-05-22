<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="/dashboard-admin"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Place Stay</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list Airplane') ? 'active' : '' }}">
                    <a href="{{ route('list-airplane.index') }}"> <i class="menu-icon fa fa-list"></i>List Airplane</a>
                </li>
                <li class="{{ ($title === 'add plane' ) ? 'active' : '' }}">
                    <a href="{{ route('list-airplane.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Airplane</a>
                </li>

                <li class="menu-title">Gallery</li><!-- /.menu-title -->
                <li class="">
                    <a href=""> <i class="menu-icon fa fa-list"></i>List Galleries</a>
                </li>
                <li class="">
                    <a href=""> <i class="menu-icon fa fa-plus"></i>Add galleries</a>
                </li>

                <li class="menu-title">activity</li><!-- /.menu-title -->
                <li class="">
                    <a href=""> <i class="menu-icon fa fa-list"></i>List activities</a>
                </li>
                <li class="">
                    <a href=""> <i class="menu-icon fa fa-plus"></i>Add Activity</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>List Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>