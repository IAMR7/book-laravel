<h1>AKu halaman HOMEPAGE</h1>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="dropdown-item">
      <i class="ti-power-off text-primary"></i>
      Logout
    </button>
  </form>