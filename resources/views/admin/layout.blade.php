<!DOCTYPE html>
<html lang="en">
  @include('admin.partials.head')
  <body class="app sidebar-mini">
    @include('admin.partials.header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('admin/images/48.jpg')}}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{url('admin/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Catalog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{url('admin/products')}}"><i class="icon fa fa-circle-o"></i> Products</a></li>
            <li><a class="treeview-item" href="{{url('admin/categories')}}"><i class="icon fa fa-circle-o"></i> Categories</a></li>
            <li><a class="treeview-item" href="{{url('admin/attributes')}}"><i class="icon fa fa-circle-o"></i> Attributes</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Users &amp; Roles</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ url('admin/users')}}"><i class="icon fa fa-circle-o"></i> Users</a></li>
            <li><a class="treeview-item" href="{{ url('admin/roles')}}"><i class="icon fa fa-circle-o"></i> Roles</a></li>
          </ul>
        </li>

      </ul>
    </aside>
    <main class="app-content">
      @yield('content')
    </main>
    @include('admin.partials.script')
  </body>
</html>