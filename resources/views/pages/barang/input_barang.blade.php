@extends('layout.master')

@section('content')
@php
    use App\Models\category_cabang;
    $cabang = category_cabang::all();
@endphp
    <div class="row">
        <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">Input Mask</h6>
                <form class="forms-sample">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Product Name:</label>
                        <input class="form-control mb-4 mb-md-0" id="product-name-input" type="text" placeholder="Search for a product..." />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Supplier:</label>
                        <select class="form-control" id="supplier-select">
                            <option value="">All Suppliers</option>
                            <option value="supplier1">Supplier 1</option>
                            <option value="supplier2">Supplier 2</option>
                            <option value="supplier3">Supplier 3</option>
                        </select>
                    </div>
                </div>
                <!-- Rest of the form content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Date:</label>
                        <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Time (12 hour):</label>
                        <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="hh:mm tt" />
                    </div>
                </div>
                <!-- Rest of the form content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Phone:</label>
                        <input class="form-control mb-4 mb-md-0" data-inputmask-alias="(+99) 9999-9999" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Credit card:</label>
                        <input class="form-control" data-inputmask-alias="9999-9999-9999-9999" />
                    </div>
                </div>
                <!-- Rest of the form content -->
                <input type="button" class="btn btn-primary me-2" value="Tambah" onclick="addRow()" />
                <input type="submit" class="btn btn-primary me-2" value="Kirim" />
                <button onclick="window.history.go(-1); return false;" type="submit" value="Cancel" class="btn btn-secondary">Cancel</button>
            </form>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h6 class="card-title">Input Mask</h6>
                <div class="tabel-sementara" class="mt-5">
                    <div class="table-responsive">
                        <table id="product-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Jumlah Barang</th>
                                    <th>Harga per Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Supplier Barang</th>
                                    <th>Barcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table rows will be dynamically added here -->
                            </tbody>
                        </table>
                    </div>
                    
                    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
                    
                    <script>
                        const productTable = $('#product-table').DataTable();
                    
                        function addRow() {
                        // Retrieve values from the form fields
                        const quantity = document.getElementById('quantity-input').value;
                        const price = document.getElementById('price-input').value;
                        const productName = document.getElementById('product-name-input').value;
                        const supplier = document.getElementById('supplier-select').value;
                        const barcode = document.getElementById('barcode-input').value;

                        // Create the delete button with red color and label
                        const deleteButton = `<button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Hapus</button>`;

                        // Add the row to the DataTable
                        const newRow = productTable.row.add([quantity, price, productName, supplier, barcode, deleteButton]).draw();

                        // Store the row node in a custom attribute for easy deletion
                        $(newRow.node()).data('node', newRow);

                        // Clear the form fields
                        document.getElementById('quantity-input').value = '';
                        document.getElementById('price-input').value = '';
                        document.getElementById('product-name-input').value = '';
                        document.getElementById('supplier-select').value = '';
                        document.getElementById('barcode-input').value = '';
                    }

                    </script>
            </div>
        </div>
        </div>
    </div>
    
@endsection
