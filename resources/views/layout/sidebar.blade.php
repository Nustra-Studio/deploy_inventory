<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Nustra<span>Studio</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/input-barang']) }}">
        <a href="{{ url('/input-barang') }}" class="nav-link">
          <i class="link-icon" data-feather="plus-circle"></i>
          <span class="link-title">Input Barang</span>
        </a>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item {{ active_class(['data/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#data" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="database"></i>
          <span class="link-title">Master Data</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['data/*']) }}" id="data">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/supllier') }}" 
              class="nav-link {{ active_class(['/dupllier']) }}">
              Suplliers</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/cabang') }}" 
              class="nav-link {{ active_class(['/cabang']) }}">
              Cabang</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/categorycabang') }}" 
              class="nav-link {{ active_class(['/cabang']) }}">
              Category Cabang</a>
            </li>
          </ul>
        </div>
        
      </li>
      <li class="nav-item {{ active_class(['barang/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#data-barang" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Barang</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['barang/*']) }}" id="data-barang">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/barang') }}" 
              class="nav-link {{ active_class(['/barang']) }}">
              Barang</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/category') }}" 
              class="nav-link {{ active_class(['/Category']) }}">
              Category</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['supplier/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#data-supplier" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="package"></i>
          <span class="link-title">Supplier</span>
          @php
              $supplier = \App\Models\suplier::all();
          @endphp
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['supplier/*']) }}" id="data-supplier">
          @php
          $supplier = \App\Models\suplier::all();
          @endphp
          <ul class="nav sub-menu">
            @foreach ($supplier as $item)
            <li class="nav-item">
              <a href="{{ route('supplier.barang', ['uuid' => $item->uuid]) }}" 
              class="nav-link {{ active_class(['/supplier']) }}">
              {{$item->nama}}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Distribusi</li>
      <li class="nav-item {{ active_class(['/distribusi']) }}">
        <a href="{{ url('/distribusi') }}" class="nav-link">
          <i class="link-icon" data-feather="truck"></i>
          <span class="link-title">Distribusi</span>
        </a>
      </li>
      <li class="nav-item nav-category">Transaksi</li>
      <li class="nav-item {{ active_class(['/pembelian']) }}">
        <a href="{{ url('/pembelian') }}" class="nav-link">
          <i class="link-icon" data-feather="shopping-cart"></i>
          <span class="link-title">Pembelian</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pengeluaran']) }}">
        <a href="{{ url('/pengeluaran') }}" class="nav-link">
          <i class="link-icon" data-feather="log-out"></i>
          <span class="link-title">Pengeluaran</span>
        </a>
      </li>

    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted mb-2">Sidebar:</h6>
    <div class="mb-3 pb-3 border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>