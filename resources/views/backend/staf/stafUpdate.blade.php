@extends('layouts.master')
@section('titleheader', 'Update Data Karyawan')
@section('page1', 'Home')
@section('title', 'Karyawan')

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
        <h3 class="card-title">Edit Data Karyawan</h3>
    </div>
    <form class="_form" action="{{route('staff.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">

            <div class="col-md-4">
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
                    <img src="{{asset('staffimg/'.$data->gambar)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>

             <div class="form-group col-md-4">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukan nama"  class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->nama}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Jabatan</label>
                <input type="text" name="jabatan" placeholder="..." class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->jabatan}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Facebook</label>
                <input type="text" name="fb" placeholder="Masukan link facebook" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->fb}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Twitter</label>
                <input type="text" name="tw" placeholder="Masukan link Twitter" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->tw}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Instagram</label>
                <input type="text" name="ig" placeholder="Masukan link instagram" class="form-control  @error('desk') is-invalid @enderror" fdprocessedid="m7zm6g" required value="{{$data->ig}}">
                @error('desk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="">Deskripsi</label>
                <textarea name="desk" id="" cols="4" rows="4" class="form-control" placeholder="...">{{$data->desk}}</textarea>
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
