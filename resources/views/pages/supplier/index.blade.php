@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Master Data</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Supplier</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Supplier</h4>
            <a href="{{ url('/barang/create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
      <div class="card-body">
        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
        
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                {{-- tabel head ID	nama	alamat	telepon	suplayer	product	category_product --}}
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Suplayer</th>
                <th>Product</th>
                <th>Category Product</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tb-category">
              <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>System Architect</td>
                <td>System Architect</td>
                <td>System Architect</td>
                <td>System Architect</td>
                <td>System Architect</td>
                <td>
                  <div class="text-end">
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                  </div>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush