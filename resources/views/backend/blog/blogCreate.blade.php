@extends('layouts.master')
@section('titleheader', 'Create Blog')
@section('page1', 'Home')
@section('title', 'Blog')

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
        <h3 class="card-title">Tambah Blog</h3>
    </div>
    <form class="_form" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row align-items-start">
            <div class="form-group col-md-6">
                <label>Judul Blog</label>
                <input type="text" name="judul" placeholder="Masukan judul" class="form-control @error('judul') is-invalid @enderror"   value="{{old('judul')}}">
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          
            <div class="form-goup col-md-6">
                <label>Kategori Blog</label>
                <select class="custom-select  @error('categoryblog_id') is-invalid @enderror" name="categoryblog_id">
                    <option selected disabled>Pilih Kategori Resep</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
                @error('categoryblog_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          
            <div class="form-group col-md-12 mt-3">
                <label>Deskripsi Singkat</label>
                <textarea name="excerpt" class="form-control @error('excerpt') is-invalid @enderror" cols="2" rows="2">{{old('excerpt')}}</textarea>
                @error('excerpt')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-12">
                <label>Body</label>
                <textarea name="body" id="body" class="@error('body') is-invalid @enderror">{{old('body')}}</textarea>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
                
            <div class="form-group col-md-6 mt-3">
                <label>Label</label>
                <textarea name="label" class="form-control @error('label') is-invalid @enderror" id="" cols="2" rows="2">{{old('label')}}</textarea>
                @error('label')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6 mt-3">
                <label>Meta Keyword</label>
                <textarea name="meta_key" class="form-control  @error('meta_key') is-invalid @enderror" id="" cols="2" rows="2">{{old('meta_key')}}</textarea>
                @error('meta_key')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
                @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img id="image-preview" src="" alt="Image Preview" width="100px" class="ml-3 mb-3" hidden>
                @error('gambar')
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

{{-- <script>
    var editorClass = ['body'];
    editorClass.forEach(e => {
      CKEDITOR.replace(e, {
        filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
      })
    });
    </script>
<script> --}}
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
