@extends('admin.layout.index')
@section('content')
    <h1 class="mt-4">Form Edit Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('products') }}">Products</a></li>
        <li class="breadcrumb-item active">Form Edit Produk</li>
    </ol>
     <div class="card mb-4">
        <div class="card-body">
            @foreach ($product as $p)
                <form method="POST" action="{{ url('products/update/' . $p->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-3">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <input id="kode" name="kode" type="text" class="form-control" value="{{ $p->kode }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" value="{{ $p->nama }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                        <div class="col-8">
                            <input id="harga_jual" name="harga_jual" type="text" class="form-control"
                                value="{{ $p->harga_jual }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                        <div class="col-8">
                            <input id="harga_beli" name="harga_beli" type="text" class="form-control"
                                value="{{ $p->harga_beli }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <input id="stok" name="stok" type="text" class="form-control" value="{{ $p->stok }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                        <div class="col-8">
                            <input id="min_stok" name="min_stok" type="text" class="form-control" value="{{ $p->min_stok }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control">{{ $p->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
                        <div class="col-8">
                            <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select form-control">
                                @foreach ($product_category as $d)
                                    <option value="{{ $d->id }}" {{ $p->kategori_produk_id == $d->id ? 'selected' : '' }}>
                                        {{ $d->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
     </div>
@endsection
