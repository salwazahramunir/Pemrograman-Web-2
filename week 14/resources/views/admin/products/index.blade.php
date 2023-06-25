@extends('admin.layout.index')
@section('content')
    <h1 class="mt-4">Daftar Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Daftar Produk</li>
    </ol>
    @if (Auth::user()->role == 'admin')
        <a href="{{ url('products/create') }}" class="btn btn-primary mb-4">Tambah Produk Baru</a>
    @endif
    @if (Auth::user()->role != 'pelanggan')
				{{-- Disini Isi Konten --}}
            <div class="card mb-4">
        @if (session('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
        @endif
        <div class="card-body">
            <table id="datatablesSimple">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->kode }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->harga_jual }}</td>
                            <td>{{ $p->harga_beli }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->min_stok }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>{{ $p->nama_kategori }}</td>
                            <td>
                                <a href="{{ url('products/edit/' . $p->id) }}" class="btn btn-warning">Edit</a>
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ url('products/delete/' . $p->id) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
                                @endif
                            </td>
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
	@else
        @include('admin.access_denied')
    @endif
@endsection
