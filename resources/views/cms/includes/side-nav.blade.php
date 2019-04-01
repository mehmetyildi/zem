<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle img-responsive" width="48" 
                            src="{{ (auth()->user()->settings->profile_photo) ? url('storage/profile-photos/'.auth()->user()->settings->profile_photo) :  url('cms/img/avatar.png') }}" 
                        />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ auth()->user()->name }}</strong>
                     </span> <span class="text-muted text-xs block">{{ auth()->user()->roles[0]->name }} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ route('cms.change-profile-photo.index') }}">Profil Fotoğrafı</a></li>
                        <li><a href="{{ route('cms.tasks.index') }}">Yapılacaklar</a></li>
                        <li><a href="{{ route('cms.inbox.index') }}">Inbox</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">Çıkış</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    P
                </div>
            </li>
            <li class="{{ (strpos($currentRouteName, 'home') !== false) ? 'active' : '' }}">
                <a href="{{ route('cms.home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Anasayfa</span></a>
            </li>
            @can('view_user_management')
            <li class="{{ (strpos($currentRouteName, 'user-management') !== false) ? 'active' : '' }}">
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Kullanıcı Yönetimi</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('manage_roles')
                    <li class="{{ (strpos($currentRouteName, 'user-management.roles') !== false) ? 'active' : '' }}">
                        <a href="{{ route('cms.user-management.roles.index') }}">Roller</a>
                    </li>
                    @endcan
                    @can('manage_permissions')
                    <li class="{{ (strpos($currentRouteName, 'user-management.permissions') !== false) ? 'active' : '' }}">
                        <a href="{{ route('cms.user-management.permissions.index') }}">Yetkiler</a>
                    </li>
                    @endcan
                    @can('manage_users')
                    <li class="{{ (strpos($currentRouteName, 'user-management.users') !== false) ? 'active' : '' }}">
                        <a href="{{ route('cms.user-management.users.index') }}">Kullanıcılar</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('view_forms')
            <li class="{{ (strpos($currentRouteName, 'forms') !== false) ? 'active' : '' }}">
                <a href="{{ route('cms.forms.index') }}"><i class="fa fa-list-alt"></i> <span class="nav-label">Formlar </span></a>
            </li>
            @endcan
            @can('view_inbox')
            <li>
                <a href="{{ route('cms.inbox.index') }}">
                    <i class="fa fa-envelope"></i> <span class="nav-label">Inbox </span>
                    @if(unreadMailCount() and auth()->user()->settings->showNotifications)
                    <span class="label label-warning pull-right">{{ unreadMailCount() }}</span>
                    @endif
                </a>
            </li>
            @endcan
            @can('edit_content')
            <li class="{{ (strpos($currentRouteName, 'file-manager') !== false) ? 'active' : '' }}">
                <a href="{{ route('cms.file-manager.index') }}"><i class="fa fa-folder-open"></i> <span class="nav-label">Dosya Yöneticisi </span></a>
            </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'cities') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.cities.index') }}"><i class="fa fa-globe"></i> <span class="nav-label">Şehirler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'sectors') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.sectors.index') }}"><i class="fa fa-university"></i> <span class="nav-label">Sektörler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'project-types') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.project-types.index') }}"><i class="fa fa-object-group"></i> <span class="nav-label">Proje Tipleri </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'employees') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.employees.index') }}"><i class="fa fa-user-plus"></i> <span class="nav-label">Çalışanlar </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'customers') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.customers.index') }}"><i class="fa fa-sort-alpha-asc"></i> <span class="nav-label">Müşteriler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'projects') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.projects.index') }}"><i class="fa fa-globe"></i> <span class="nav-label">Projeler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'references') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.references.index') }}"><i class="fa fa-check-circle"></i> <span class="nav-label">Referanslar </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'categories') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.categories.index') }}"><i class="fa fa-sitemap"></i> <span class="nav-label">Ürün Kategorileri </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'products') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> <span class="nav-label">Ürünler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'slides') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.slides.index') }}"><i class="fa fa-image"></i> <span class="nav-label">Slide'lar </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'articles') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.articles.index') }}"><i class="fa fa-globe"></i> <span class="nav-label">Makaleler </span></a>
                </li>
            @endcan
            @can('edit_content')
                <li class="{{ (strpos($currentRouteName, 'popups') !== false) ? 'active' : '' }}">
                    <a href="{{ route('cms.popups.index') }}"><i class="fa fa-bullhorn"></i> <span class="nav-label">Popup Duyuruları </span></a>
                </li>
            @endcan
        </ul>
    </div>
</nav>