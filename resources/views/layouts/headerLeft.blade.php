<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="/"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Place Stay</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list Airplane') ? 'active' : '' }}">
                    <a href="{{ route('list-airplane.index') }}"> <i class="menu-icon fa fa-list"></i>List Airplane</a>
                </li>
                <li class="{{ ($title === 'add plane' ) ? 'active' : '' }}">
                    <a href="{{ route('list-airplane.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Airplane</a>
                </li>

                <li class="menu-title">Spare Part</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list Item') ? 'active' :'' }}">
                    <a href="{{ route('list-items.index') }}"> <i class="menu-icon fa fa-list"></i>List Spare Part</a>
                </li>
                <li class="{{ ($title === 'add spare part') ? 'active':'' }}">
                    <a href="{{ route('list-items.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Spare Part</a>
                </li>

                <li class="menu-title">service</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list service') }}">
                    <a href="{{ route('list-service.index') }}"> <i class="menu-icon fa fa-list"></i>List Service</a>
                </li>
                <li class="{{ ($title === 'add service') }}">
                    <a href="{{ route('list-service.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Service</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>