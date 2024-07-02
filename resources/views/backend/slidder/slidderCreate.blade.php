@extends('layouts.master')
@section('titleheader', 'Create Slider')
@section('page1', 'Slidder')
@section('title', ' Slidder')

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
        <h3 class="card-title">Tambah Slider</h3>
    </div>
    <form class="_form" action="{{route('slidder.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Judul Slider</label>
                <input type="text" name="judul" placeholder="Masukan judul slider" class="form-control @error('judul') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{old('judul')}}" >
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Deskripsi Slidder</label>
                <input type="text" name="desk" placeholder="Masukan deskripsi slider" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{old('desk')}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
         


        </div>
        <img id="image-preview" src="" alt="Image Preview" width="150px" class="ml-3 mb-3" hidden>
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
