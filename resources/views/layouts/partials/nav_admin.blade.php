<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{route('admin.dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="{{ Route::is('admin.users') ? 'active' : '' }}">
                    <a href="{{route('admin.users')}}"><i class="fe fe-user"></i> <span>User List</span></a>
                </li>

                <li class="{{ Route::is('admin.bets') ? 'active' : '' }}">
                    <a href="{{route('admin.bets')}}"><i class="fe fe-activity"></i> <span>Bets</span></a>
                </li>

                <li class="{{ Route::is('admin.profile') ? 'active' : '' }}">
                    <a href="{{route('admin.profile')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>

                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">
                        <i class="fe fe-code"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
