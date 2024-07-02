@extends('layouts.master')
@section('titleheader', 'Page Staff')
@section('page1', 'Home')
@section('title', ' Page Staff')

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
        <h3 class="card-title">Update Halaman Staff </h3>
    </div>
    <form class="_form" action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">

            <div class="form-group col-md-6">
                <label>Judul</label>
                <input type="text" name="judul" value="{{$data->judul}}" class="form-control" value="" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi</label>
                <textarea name="desk" class="form-control" id="" cols="2" rows="2">{{$data->desk}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Nama Pemilik</label>
                <input type="text" name="owner_name" class="form-control" value="{{$data->owner_name}}" fdprocessedid="bp6kma">
            </div>

            <div class="form-group col-md-6">
                <label>Jabatan</label>
                <input type="text" name="owner_jabatan" class="form-control" value="{{$data->owner_jabatan}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Sejarah Pemilik</label>
                <textarea name="owner_history" class="form-control" id="" cols="2" rows="2">{{$data->owner_history}}</textarea>
            </div>
            <div class=" card-body col-md-6">
                <label for="">Gambar Sejarah</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="icon_banner" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->gambar_history)
                <div style="width: 100px">
                    <img src="{{asset('pagestaffimg/'.$data->gambar_history)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
            <div class="col-md-6">
                <label for="">Background</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg)
                <div style="width: 100px">
                    <img src="{{asset('pagestaffimg/'.$data->bg)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
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
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
@endsection
