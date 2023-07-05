@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
@php
    use App\Models\cabang;
@endphp
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
  </ol>
</nav>
@php
    use App\Models\harga_khusus;
@endphp
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">History Pengeluaran</h4>
      <div class="card-body">
        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
        
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Product</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Cabang</th>
                <th>Keterangan</th>
                <th>Waktu</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              @php
                $cabang = cabang::where('uuid', $item->id_cabang)->first();
              @endphp
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kode_barang}}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga_pokok }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{$cabang->nama }}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{ $item->created_at }}</td>
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