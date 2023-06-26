@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Distribusi Barang</li>
  </ol>
</nav>
@php
    use App\Models\cabang;
    $data = cabang::all();
@endphp
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        {{-- buatkan card dengan input disable nama toko alamat toko --}}
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Stock</th>
                <th>Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tb-local">
              <tr>
                @foreach ($data as $item)
                <form action="">
                  <td>{{$loop->index+1}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->kepala_cabang}}</td>
                  <td>{{$item->alamat}}</td>
                  <td><input type="number" name="jumlah" class="form-control form-control-sm"></td>
                  <td>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary btn-icon add-to-tb-barang">
                        <i data-feather="repeat"></i>
                      </button>
                    </div>
                  </td>
                  <input type="hidden" name="kode" value="{{ $item->kode }}">
                  <input type="hidden" name="nama" value="{{ $item->nama }}">
                  <input type="hidden" name="stock" value="{{ $item->stock }}">
                </form>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTableExample2" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tb-barang">
              <!-- Data akan ditambahkan melalui JavaScript -->
            </tbody>
          </table>
        </div>
        <!-- Tambahkan input hidden untuk posting -->
        <form action="/post-data" method="POST" id="postDataForm">
          @csrf
          <input type="hidden" name="data_barang" id="dataBarangInput">
          <div class="text-end">
            <button type="submit" class="btn btn-primary btn-icon btn-send" id="kirim" style="display: none;">
              <i data-feather="send">Send</i>
            </button>
          </div>
        </form>
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
  <script>
    $(document).ready(function() {
      var tableExample;
      var tableExample2;

      // Initialize DataTableExample
      function initDataTableExample() {
        tableExample = $('#dataTableExample').DataTable();
      }

      // Initialize DataTableExample2
      function initDataTableExample2() {
        tableExample2 = $('#dataTableExample2').DataTable();
      }

      // Initialize DataTables
      initDataTableExample();
      initDataTableExample2();

      // Ambil data dari tb-local dan masukkan ke tb-barang
      $(document).on('click', '.add-to-tb-barang', function() {
        var row = $(this).closest('tr');
        var kode = row.find('td:eq(1)').text();
        var nama = row.find('td:eq(2)').text();
        var jumlah = row.find('input[name="jumlah"]').val();

        // Validasi jumlah
        if (jumlah < 1) {
          alert('Jumlah harus lebih besar dari 0.');
          return;
        }

        var newRow = '<tr>';
        newRow += '<td>' + (tableExample2.rows().count() + 1) + '</td>';
        newRow += '<td>' + kode + '</td>';
        newRow += '<td>' + nama + '</td>';
        newRow += '<td>' + jumlah + '</td>';
        newRow += '<td><button class="btn btn-danger btn-icon delete-row"><i data-feather="trash"></i></button></td>';
        newRow += '</tr>';

        // Tambahkan baris ke tb-barang
        tableExample2.row.add($(newRow)).draw();

        // Tampilkan tombol Send
        toggleSendButton();
      });

      // Menghapus baris pada tb-barang
      $(document).on('click', '.delete-row', function() {
        tableExample2.row($(this).closest('tr')).remove().draw();

        // Tampilkan atau sembunyikan tombol Send
        toggleSendButton();
      });

      // Toggle tombol Send
      function toggleSendButton() {
        var rowCount = tableExample2.rows().count();
        var sendButton = $('#kirim');

        if (rowCount > 0) {
          sendButton.show();
        } else {
          sendButton.hide();
        }
      }

      // Submit form
      $('#postDataForm').submit(function(e) {
        e.preventDefault();
        var dataBarang = tableExample2.data().toArray();

        // Mengisi nilai input hidden dengan dataBarang yang dikonversi ke JSON
        $('#dataBarangInput').val(JSON.stringify(dataBarang));

        // Kirim dataBarang ke server menggunakan AJAX atau form submit
        // ...

        // Contoh menggunakan AJAX
        $.ajax({
          url: '/post-data',
          method: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            // Handle response dari server
          },
          error: function(error) {
            // Handle error pada AJAX request
          }
        });
      });
    });
  </script>
@endpush
