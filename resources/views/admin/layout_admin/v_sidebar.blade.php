<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{request()->is("/") ? "active" : ""}}">
        <a class="nav-link" href="/">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{request()->is("/admin/users") ? "active" : ""}}">
        <a class="nav-link" href="/admin/users">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Users Manage</span>
        </a>
      </li>
      <li class="nav-item {{request()->is("/admin/book") ? "active" : ""}}">
        <a class="nav-link" href="/admin/book">
          <i class="icon-book menu-icon"></i>
          <span class="menu-title">Book Manage</span>
        </a>
      </li>
    </ul>
  </nav>