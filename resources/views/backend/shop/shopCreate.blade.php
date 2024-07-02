@extends('layouts.master')
@section('titleheader', 'Create Produk')
@section('page1', 'Shop')
@section('title', ' Shop')

@section('content')

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success'
        , title: 'Success!'
        , text: '{{ session('
        success ') }}'
    });

</script>
@endif
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Produk</h3>
    </div>
    <form class="_form" action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Nama Produk</label>
                <input type="text" name="produk_name" placeholder="Masukan nama produk" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{old('produk_name')}}" >
                @error('produk_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-goup col-md-6">
                <label>Informasi Produk</label>
                <select class="custom-select" name="information">
                    <option selected disabled>Pilih informasi produk</option>
                    <option value="none">None</option>
                    <option value="Popular">Popular</option>
                    <option value="Sold Out">Sold Out</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Harga Awal</label>
                <input type="text" name="before_discount" placeholder="..." class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" value="{{old('judul')}}" >
                @error('before_discount')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Harga Akhir</label>
                <input type="text" name="after_discount" placeholder="..." class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{old('judul')}}" >
                @error('after_discount')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Deskripsi Produk</label>
                <input type="text" name="desc" placeholder="Masukan deskripsi slider" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{old('desk')}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-goup col-md-6">
                <label>Kategori Produk</label>
                <select class="custom-select" name="categoryproduk_id">
                    <option selected disabled>Open this select menu</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                        
                    @endforeach
                   
                </select>
            </div>
            <div class="col-md-6">
                <label>Gambar Produk</label>
                <div class="input-group align-items-center">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" id="image" name="gambar" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <img id="image-preview" src="" alt="Image Preview" width="100px" class="ml-3 mb-3" hidden>
            </div>
            <div class="form-group col-md-6">
                <label>Tag Label</label>
                <input type="text" name="tag" placeholder="..." class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{old('tag')}}" >
                @error('tag')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

          
        </div>

        <div class="card-footer">
            <a onclick="return history.go(-1)" class="btn btn-default" id="_backButton">Kembali</a>
            <button type="submit" class="btn btn-primary" id="_button" fdprocessedid="867nk">Simpan</button>
        </div>
    </form>
</div>
<script>
    function previewImage() {

        var preview = document.querySelector('#image-preview');
        var file = document.querySelector('#image').files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            preview.hidden = false;
            reader.readAsDataURL(file);
        } else {
            preview.hidden = true;
            preview.src = "";
        }
    }

</script>
@endsection
