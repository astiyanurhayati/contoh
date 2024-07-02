@extends('layouts.master')
@section('titleheader', 'Edit Iklan Blog')
@section('page1', 'Home')
@section('title', 'Edit Iklan Blog')

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
        <h3 class="card-title">Edit Iklan</h3>
    </div>
    <form class="_form" action="{{route('iklan.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Nama</label>
                <input type="text" name="name" placeholder="Masukan deskripsi" class="form-control  @error('name') is-invalid @enderror"  value="{{$data->nama}}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Link</label>
                <input type="text" name="link" placeholder="Masukan deskripsi" class="form-control  @error('link') is-invalid @enderror" required value="{{$data->link}}">
                @error('link')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Gambar</label>
                <div class="input-group">
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
                    <img src="{{asset('iklanblogimg/'.$data->gambar)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
        </div>
        <div class="custom-control col-md-6 ml-4 custom-switch ml-2">
            <input type="checkbox" class="custom-control-input" name="show" id="customSwitch1" checked>
            <label class="custom-control-label" for="customSwitch1">Tampilkan Iklan</label>
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
