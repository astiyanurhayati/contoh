@extends('layouts.master')
@section('titleheader', 'Feature')
@section('page1', 'Home')
@section('title', ' Feature')

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
        <h3 class="card-title">Tambah </h3>
    </div>
    <form class="_form" action="{{route('feature.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="input-group card-body col-md-6">

            <label>Backgorund</label>

            <div class="align-items-center input-group">
                <div class="custom-file ">
                    <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage()">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
            <div class="pl-4">
                @if($data->image)
                <div style="width: 150px">
                    <img src="{{ asset('featureimg/'.$data->image) }}" class="img-preview img-fluid d-block">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
        </div>


            <div class="card-body row">

                <div class="form-group col-md-4">
                    <label>SVG 1</label>
                    <input type="text" name="svg1" value="{{$data->svg1}}" class="form-control" fdprocessedid="bp6kma">
                </div>
                <div class="form-group col-md-4">
                    <label>Judul Feature 1</label>
                    <input type="text" name="judul1" value="{{$data->judul1}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Deskripsi Feature 1</label>
                    <input type="text" name="desk1" value="{{$data->desk1}}" class="form-control">
                </div>
            </div>
            <div class="card-body row">
                <div class="form-group col-md-4">
                    <label>SVG 2</label>
                    <input type="text" name="svg2" value="{{$data->svg2}}" class="form-control" fdprocessedid="bp6kma">
                </div>
                <div class="form-group col-md-4">
                    <label>Judul Feature 2</label>
                    <input type="text" name="judul2" value="{{$data->judul2}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Deskripsi Feature 2</label>
                    <input type="text" name="desk2" value="{{$data->desk2}}" class="form-control">
                </div>
            </div>
            <div class="card-body row">
                <div class="form-group col-md-4">
                    <label>SVG 3</label>
                    <input type="text" name="svg3" value="{{$data->svg3}}" class="form-control" fdprocessedid="bp6kma">
                </div>
                <div class="form-group col-md-4">
                    <label>Judul Feature 3</label>
                    <input type="text" name="judul3" value="{{$data->judul3}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Deskripsi Feature 3</label>
                    <input type="text" name="desk3" value="{{$data->desk3}}" class="form-control">
                </div>
            </div>
            <div class="card-body row">
                <div class="form-group col-md-4">
                    <label>SVG 4</label>
                    <input type="text" name="svg4" value="{{$data->svg4}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Judul Feature 4</label>
                    <input type="text" name="judul4" value="{{$data->judul4}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Deskripsi Feature 4</label>
                    <input type="text" name="desk4" value="{{$data->desk4}}" class="form-control">
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
