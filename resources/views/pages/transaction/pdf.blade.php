

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />



@php
    use App\Models\harga_khusus;
    use App\Models\cabang;
    use App\Models\suplier;
@endphp
<div class="row">
  <div class="col-md-12  col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title text-center" style="font-size: 18px">
              @php
                  if($status == "masuk"){
                    $nama = "Pembelian";
                  }else{
                    $nama = "Distribusi";
                  }
              @endphp
              Report Data Transaction @if ($status == "masuk")
                  Pembelian
                @else
                  Distribusi
                  @endif
              <br> 
              {{$nama}}
              <br>
              {{ $data->first()->created_at->format('d F Y') }} - {{ $data->last()->created_at->format('d F Y') }}
            </h2>
      <div class="card-body">
        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
        
          <table id="" class="table table-bordered">
            <thead>
              @if ($status == "masuk")
                  <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Kode Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>Supplier</th>
                    <th>Waktu</th>
                  </tr>
              @else
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
              @endif
            </thead>
            <tbody>
              @if ($status == "masuk")
              @foreach ($data as $item)
              @php
                  $supplier = suplier::where('uuid', $item->id_supllayer)->first();
              @endphp
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kode_barang}}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga_pokok }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{$supplier->nama }}</td>
                <td>{{ $item->created_at->format('d F Y m:d') }}</td>
              </tr>
              @endforeach   
              @else
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
                <td>{{ $item->created_at->format('d F Y m:d') }}</td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>


  <script src="{{ asset('assets/js/data-table.js') }}"></script>
