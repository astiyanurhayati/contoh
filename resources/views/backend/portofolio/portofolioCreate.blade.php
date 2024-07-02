@extends('layouts.master')
@section('titleheader', 'Create Slider')
@section('page1', 'Portofolio')
@section('title', ' Porofolio')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Portofolio</h3>
    </div>
    <form class="_form" action="{{route('portofolio.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Judul Portofolio</label>
                <input type="text" name="judul" placeholder="Masukan judul  " class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-goup col-md-6">
                <label>Kategori Portofolio</label>
                <select class="custom-select" name="categoryporto_id">
                    <option selected disabled>Open this select menu</option>

                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                   
                </select>
            </div>

            <div class="col-md-8">
                <label>Judul Portofolio</label>

                <div class="align-items-center input-group">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <img id="image-preview" src="" alt="Image Preview" width="150px" class="ml-3 mb-3" hidden>
            </div>

            <div class="px-2 mb-5 col-md-12">
                <label>Resep</label>
                <textarea name="desk" id="desk">{{old('desk')}}</textarea>
            </div>



        </div>
        
        <div class="card-footer">
            <a onclick="return history.go(-1)" class="btn btn-default" id="_backButton">Kembali</a>
            <button type="submit" class="btn btn-primary" id="_button" fdprocessedid="867nk">Simpan</button>
        </div>
    </form>
</div>

<script>
    var editorClass = ['desk'];
    editorClass.forEach(e => {
        CKEDITOR.replace(e, {
            filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}"
            , filebrowserUploadMethod: 'form'
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
