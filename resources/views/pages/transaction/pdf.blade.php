

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <style>
    @charset "UTF-8";
table.dataTable td.dt-control {
  text-align: center;
  cursor: pointer;
}
table.dataTable td.dt-control:before {
  height: 1em;
  width: 1em;
  margin-top: -9px;
  display: inline-block;
  color: white;
  border: 0.15em solid white;
  border-radius: 1em;
  box-shadow: 0 0 0.2em #444;
  box-sizing: content-box;
  text-align: center;
  text-indent: 0 !important;
  font-family: "Courier New", Courier, monospace;
  line-height: 1em;
  content: "+";
  background-color: #31b131;
}
table.dataTable tr.dt-hasChild td.dt-control:before {
  content: "-";
  background-color: #d33333;
}

table.dataTable thead > tr > th.sorting, table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting_asc_disabled, table.dataTable thead > tr > th.sorting_desc_disabled,
table.dataTable thead > tr > td.sorting,
table.dataTable thead > tr > td.sorting_asc,
table.dataTable thead > tr > td.sorting_desc,
table.dataTable thead > tr > td.sorting_asc_disabled,
table.dataTable thead > tr > td.sorting_desc_disabled {
  cursor: pointer;
  position: relative;
  padding-right: 26px;
}
table.dataTable thead > tr > th.sorting:before, table.dataTable thead > tr > th.sorting:after, table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_asc:after, table.dataTable thead > tr > th.sorting_desc:before, table.dataTable thead > tr > th.sorting_desc:after, table.dataTable thead > tr > th.sorting_asc_disabled:before, table.dataTable thead > tr > th.sorting_asc_disabled:after, table.dataTable thead > tr > th.sorting_desc_disabled:before, table.dataTable thead > tr > th.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting:before,
table.dataTable thead > tr > td.sorting:after,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_asc:after,
table.dataTable thead > tr > td.sorting_desc:before,
table.dataTable thead > tr > td.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_asc_disabled:after,
table.dataTable thead > tr > td.sorting_desc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:after {
  position: absolute;
  display: block;
  opacity: 0.125;
  right: 10px;
  line-height: 9px;
  font-size: 0.8em;
}
table.dataTable thead > tr > th.sorting:before, table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_desc:before, table.dataTable thead > tr > th.sorting_asc_disabled:before, table.dataTable thead > tr > th.sorting_desc_disabled:before,
table.dataTable thead > tr > td.sorting:before,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_desc:before,
table.dataTable thead > tr > td.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:before {
  bottom: 50%;
  content: "▲";
}
table.dataTable thead > tr > th.sorting:after, table.dataTable thead > tr > th.sorting_asc:after, table.dataTable thead > tr > th.sorting_desc:after, table.dataTable thead > tr > th.sorting_asc_disabled:after, table.dataTable thead > tr > th.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting:after,
table.dataTable thead > tr > td.sorting_asc:after,
table.dataTable thead > tr > td.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc_disabled:after,
table.dataTable thead > tr > td.sorting_desc_disabled:after {
  top: 50%;
  content: "▼";
}
table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_desc:after {
  opacity: 0.6;
}
table.dataTable thead > tr > th.sorting_desc_disabled:after, table.dataTable thead > tr > th.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting_asc_disabled:before {
  display: none;
}
table.dataTable thead > tr > th:active,
table.dataTable thead > tr > td:active {
  outline: none;
}

div.dataTables_scrollBody table.dataTable thead > tr > th:before, div.dataTables_scrollBody table.dataTable thead > tr > th:after,
div.dataTables_scrollBody table.dataTable thead > tr > td:before,
div.dataTables_scrollBody table.dataTable thead > tr > td:after {
  display: none;
}

div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 2px;
}
div.dataTables_processing > div:last-child {
  position: relative;
  width: 80px;
  height: 15px;
  margin: 1em auto;
}
div.dataTables_processing > div:last-child > div {
  position: absolute;
  top: 0;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: rgba(13, 110, 253, 0.9);
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
div.dataTables_processing > div:last-child > div:nth-child(1) {
  left: 8px;
  animation: datatables-loader-1 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(2) {
  left: 8px;
  animation: datatables-loader-2 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(3) {
  left: 32px;
  animation: datatables-loader-2 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(4) {
  left: 56px;
  animation: datatables-loader-3 0.6s infinite;
}

@keyframes datatables-loader-1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes datatables-loader-3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes datatables-loader-2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
  white-space: nowrap;
}
table.dataTable th.dt-left,
table.dataTable td.dt-left {
  text-align: left;
}
table.dataTable th.dt-center,
table.dataTable td.dt-center,
table.dataTable td.dataTables_empty {
  text-align: center;
}
table.dataTable th.dt-right,
table.dataTable td.dt-right {
  text-align: right;
}
table.dataTable th.dt-justify,
table.dataTable td.dt-justify {
  text-align: justify;
}
table.dataTable th.dt-nowrap,
table.dataTable td.dt-nowrap {
  white-space: nowrap;
}
table.dataTable thead th,
table.dataTable thead td,
table.dataTable tfoot th,
table.dataTable tfoot td {
  text-align: left;
}
table.dataTable thead th.dt-head-left,
table.dataTable thead td.dt-head-left,
table.dataTable tfoot th.dt-head-left,
table.dataTable tfoot td.dt-head-left {
  text-align: left;
}
table.dataTable thead th.dt-head-center,
table.dataTable thead td.dt-head-center,
table.dataTable tfoot th.dt-head-center,
table.dataTable tfoot td.dt-head-center {
  text-align: center;
}
table.dataTable thead th.dt-head-right,
table.dataTable thead td.dt-head-right,
table.dataTable tfoot th.dt-head-right,
table.dataTable tfoot td.dt-head-right {
  text-align: right;
}
table.dataTable thead th.dt-head-justify,
table.dataTable thead td.dt-head-justify,
table.dataTable tfoot th.dt-head-justify,
table.dataTable tfoot td.dt-head-justify {
  text-align: justify;
}
table.dataTable thead th.dt-head-nowrap,
table.dataTable thead td.dt-head-nowrap,
table.dataTable tfoot th.dt-head-nowrap,
table.dataTable tfoot td.dt-head-nowrap {
  white-space: nowrap;
}
table.dataTable tbody th.dt-body-left,
table.dataTable tbody td.dt-body-left {
  text-align: left;
}
table.dataTable tbody th.dt-body-center,
table.dataTable tbody td.dt-body-center {
  text-align: center;
}
table.dataTable tbody th.dt-body-right,
table.dataTable tbody td.dt-body-right {
  text-align: right;
}
table.dataTable tbody th.dt-body-justify,
table.dataTable tbody td.dt-body-justify {
  text-align: justify;
}
table.dataTable tbody th.dt-body-nowrap,
table.dataTable tbody td.dt-body-nowrap {
  white-space: nowrap;
}

/*! Bootstrap 5 integration for DataTables
 *
 * ©2020 SpryMedia Ltd, all rights reserved.
 * License: MIT datatables.net/license/mit
 */
table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
  border-collapse: separate !important;
  border-spacing: 0;
}
table.dataTable td,
table.dataTable th {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center;
}
table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap;
}
table.dataTable.table-striped > tbody > tr:nth-of-type(2n+1) > * {
  box-shadow: none;
}
table.dataTable > tbody > tr {
  background-color: transparent;
}
table.dataTable > tbody > tr.selected > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.9);
  color: white;
}
table.dataTable > tbody > tr.selected a {
  color: #090a0b;
}
table.dataTable.table-striped > tbody > tr.odd > * {
  box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.05);
}
table.dataTable.table-striped > tbody > tr.odd.selected > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.95);
}
table.dataTable.table-hover > tbody > tr:hover > * {
  box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.075);
}
table.dataTable.table-hover > tbody > tr.selected:hover > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.975);
}

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap;
}
div.dataTables_wrapper div.dataTables_length select {
  width: auto;
  display: inline-block;
}
div.dataTables_wrapper div.dataTables_filter {
  text-align: right;
}
div.dataTables_wrapper div.dataTables_filter label {
  font-weight: normal;
  white-space: nowrap;
  text-align: left;
}
div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
}
div.dataTables_wrapper div.dataTables_info {
  padding-top: 0.85em;
}
div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap;
  justify-content: flex-end;
}
div.dataTables_wrapper div.dt-row {
  position: relative;
}

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody > table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
div.dataTables_scrollBody > table > thead .sorting:before,
div.dataTables_scrollBody > table > thead .sorting_asc:before,
div.dataTables_scrollBody > table > thead .sorting_desc:before,
div.dataTables_scrollBody > table > thead .sorting:after,
div.dataTables_scrollBody > table > thead .sorting_asc:after,
div.dataTables_scrollBody > table > thead .sorting_desc:after {
  display: none;
}
div.dataTables_scrollBody > table > tbody tr:first-child th,
div.dataTables_scrollBody > table > tbody tr:first-child td {
  border-top: none;
}

div.dataTables_scrollFoot > .dataTables_scrollFootInner {
  box-sizing: content-box;
}
div.dataTables_scrollFoot > .dataTables_scrollFootInner > table {
  margin-top: 0 !important;
  border-top: none;
}

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
div.dataTables_wrapper div.dataTables_filter,
div.dataTables_wrapper div.dataTables_info,
div.dataTables_wrapper div.dataTables_paginate {
    text-align: center;
  }
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: center !important;
  }
}
table.dataTable.table-sm > thead > tr > th:not(.sorting_disabled) {
  padding-right: 20px;
}

table.table-bordered.dataTable {
  border-right-width: 0;
}
table.table-bordered.dataTable thead tr:first-child th,
table.table-bordered.dataTable thead tr:first-child td {
  border-top-width: 1px;
}
table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0;
}
table.table-bordered.dataTable th:first-child, table.table-bordered.dataTable th:first-child,
table.table-bordered.dataTable td:first-child,
table.table-bordered.dataTable td:first-child {
  border-left-width: 1px;
}
table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 1px;
}
table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-bottom-width: 1px;
}

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:first-child {
  padding-left: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:last-child {
  padding-right: 0;
}

  </style>



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
        
        <div class="table-responsive">
          <table id="" class="table" style="font-size: 13px">
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
