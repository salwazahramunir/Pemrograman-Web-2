@extends('admin.template.index')
@section('content')
    <h1 class="mt-4">Product List</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Product List</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>Deskripsi</th>
                            <th>Kategori Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($products as $product)
                             <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $product->kode }}</td>
                                <td>{{ $product->nama }}</td>
                                <td>{{ $product->harga_jual }}</td>
                                <td>{{ $product->harga_beli }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>{{ $product->min_stok }}</td>
                                <td>{{ $product->deskripsi }}</td>
                                <td>{{ $product->nama_kategori }}</td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
