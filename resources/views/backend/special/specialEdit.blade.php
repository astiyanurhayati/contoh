@extends('layouts.master')
@section('titleheader', 'Edit Special')
@section('page1', 'Special')
@section('title', ' Special')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Specialies</h3>
    </div>
    <form class="_form" action="{{route('special.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Judul</label>
                <input type="text" name="judul" value="{{$data->judul}}" placeholder="Masukan judul" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma">
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Deskripsi</label>
                <input type="text" name="desk" value="{{$data->desk}}" placeholder="Masukan sub judul " class="form-control @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" value="" id="image" name="image" onchange="previewImage()">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>

        </div>
        <div class="pl-4">
            @if($data->image)
            <div style="width: 150px">
                <img src="{{asset('specialimg/'.$data->image)}}" class="img-preview img-fluid d-blok">
            </div>
            @else
            <div style="width: 150px">
                <img class="img-preview img-fluid">
            </div>
            @endif
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
