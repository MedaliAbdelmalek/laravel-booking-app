<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <img src="{{ asset('public/img/logo-admin.png') }}" alt=""height="50">
                <div class="sidebar-brand-text mx-3">{{ __("Page d'accueil") }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Tableau de bord') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Gestion des utilisateurs') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Utilisateurs') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseRoom" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Gestion des chambres') }}</span>
                </a>
                <div id="collapseRoom" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}" href="{{ route('admin.countries.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Pays') }}</a>
                        <a class="collapse-item {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Cat??gorie') }}</a>
                        <a class="collapse-item {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}" href="{{ route('admin.rooms.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Chambre') }}</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseBooking" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Gestion de Booking') }}</span>
                </a>
                <div id="collapseBooking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Client') }}</a>
                        <a class="collapse-item {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}" href="{{ route('admin.bookings.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Booking') }}</a>
                        <a class="collapse-item {{ request()->is('admin/find_rooms') || request()->is('admin/find_rooms/*') ? 'active' : '' }}" href="{{ route('admin.find_rooms.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Trouver une chambre') }}</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
                     <!-- Nav Item  -->
             <li class="nav-item {{ request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.system_calendars.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Calendrier') }}</span></a>
            </li>


        </ul>