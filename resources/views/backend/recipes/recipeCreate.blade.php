@extends('layouts.master')
@section('titleheader', 'Create Recipe')
@section('page1', 'Recipe')
@section('title', 'Create Recipe')

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
        <h3 class="card-title">Tambah Recipe</h3>
    </div>
    <form class="_form" action="{{route('recipe.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row align-items-start">
            <div class="form-group col-md-4">
                <label>Judul Recipe</label>
                <input type="text" name="judul" placeholder="Masukan judul" class="form-control @error('judul') is-invalid @enderror"  value="{{old('judul')}}">
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Prep Time</label>
                <input type="number" name="prep_time" placeholder="..." class="form-control @error('prep_time') is-invalid @enderror"  value="{{old('prep_time')}}">
                @error('prep_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Cook Time</label>
                <input type="number" name="cook_time" placeholder="..." class="form-control @error('cook_time') is-invalid @enderror"  value="{{old('cook_time')}}">
                @error('cook_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-goup col-md-6">
                <label>Kategori Resep</label>
                <select class="custom-select @error('kategori_resep_id') is-invalid @enderror" name="kategori_resep_id">
                    <option selected disabled>Pilih Kategori Resep</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-goup col-md-6">
                <label>Tingkat Kesulitan</label>
                <select class="custom-select  @error('kesulitan') is-invalid @enderror" name="kesulitan">
                    <option selected disabled>Open this select menu</option>
                    <option value="mudah">Mudah</option>
                    <option value="sedang">Sedang</option>
                    <option value="sulit">Sulit</option>
                </select>
                
            </div>
            <div class="form-group col-md-6 mt-3">
                <label>Deskripsi Singkat</label>
                <textarea name="desk" class="form-control  @error('desk') is-invalid @enderror" id="" cols="4" rows="4">{{old('desk')}}</textarea>
            </div>
            <div class="col-md-6 mt-3">
                <label>Gambar</label>
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
        </div>

        <div class="px-4 mb-5">
            <label>Resep</label>
            <textarea name="resep" id="resep" required>{{old('resep')}}</textarea>
        </div>
        
        <img id="image-preview" src="" alt="Image Preview" width="150px" class="ml-3 mb-3" hidden>
        <div class="card-footer">
            <a onclick="return history.go(-1)" class="btn btn-default" id="_backButton">Kembali</a>
            <button type="submit" class="btn btn-primary" id="_button" fdprocessedid="867nk">Simpan</button>
        </div>
    </form>
</div>

<script>
    var editorClass = ['resep'];
    editorClass.forEach(e => {
      CKEDITOR.replace(e, {
        filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
      })
    });
    </script>
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
