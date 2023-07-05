@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Data Barang Supplier {{$nama}}</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Barang</h4>
            <a href="{{ url('/barang/create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
      <div class="card-body">
        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
        
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kode Barang</th>
                <th>Barcode</th>
                <th>Category</th>
                <th>Harga Pokok</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              @php
                  $category = DB::table('category_barangs')->where('uuid', $item->category_id)->first();
              @endphp
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->kode_barang}}</td>
                <td>{{$item->kode_barang}}</td>
                <td>{{$category->name}}</td>
                <td>{{$item->harga_pokok}}</td>
                <td>{{$item->harga_jual}}</td>
                <td>{{$item->stok}}</td>
                <td>
                  <a href="#" class="btn btn-success btn-sm">Show</a>
                  <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  <form id="form-delete-{{ $item->id }}" action="{{ route('category.destroy', $item->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                <button class="btn btn-danger btn-sm delete-button" data-form-delete="{{ $item->id }}">Delete</button>
              </tr>
              @endforeach
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