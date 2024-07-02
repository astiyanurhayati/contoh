@extends('layouts.master')
@section('titleheader', 'Edit Produk')
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
        <h3 class="card-title">Edit Produk</h3>
    </div>
    <form class="_form" action="{{route('shop.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Nama Produk</label>
                <input type="text" name="produk_name" placeholder="Masukan nama produk" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{$data->produk_name}}" >
                @error('produk_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-goup col-md-6">
                <label>Informasi Produk</label>
                <select class="custom-select" name="information">
                    <option selected disabled>Pilih informasi produk</option>
                    <option value="Popular" {{$data->information == "Popular" ? "selected" : ""}}>Popular</option>
                    <option value="Sold Out" {{$data->information == "Sold Out" ? 'selected' : ''}}>Sold Out</option>
                    <option value="Sold Out" {{$data->information == "none" ? 'selected' : ''}}>None</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Harga Awal</label>
                <input type="number" name="before_discount" placeholder="..." value="{{$data->before_discount}}" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" >
                @error('before_discount')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Harga Akhir</label>
                <input type="number" name="after_discount" placeholder="..." value="{{$data->after_discount}}" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" >
                @error('after_discount')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Deskripsi Produk</label>
                <input type="text" name="desc" placeholder="Masukan deskripsi slider" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->desc}}">
                @error('desc')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-goup col-md-6">
                <label>Kategori Produk</label>
                <select class="custom-select" name="categoryproduk_id">
                    <option selected disabled>Open this select menu</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}" {{ $category->id == $data->categoryproduk_id ? 'selected' : '' }}>{{$category->name}}</option>
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
                @if($data->gambar)
                <div style="width: 150px">
                    <img src="{{asset('shopimg/'.$data->gambar)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
              
            <div class="form-group col-md-6">
                <label>Tag Label</label>
                <input type="text" name="tag" placeholder="..." class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{$data->tag}}" >
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
      function previewImage(){
         const image = document.querySelector('#image');
         const imgPreview = document.querySelector('.img-preview');
 
         imgPreview.style.display = 'block';
         const oFReader = new FileReader();
         oFReader.readAsDataURL(image.files[0]);
 
         oFReader.onload = function(oFREvent){
             imgPreview.src = oFREvent.target.result;
         }
 
     }
</script>
@endsection
