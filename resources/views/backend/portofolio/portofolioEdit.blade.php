@extends('layouts.master')
@section('titleheader', 'Create Slider')
@section('page1', 'Portofolio')
@section('title', ' Porofolio')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Portofolio</h3>
    </div>
    <form class="_form" action="{{route('portofolio.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-8">
                <label>Judul Portofolio</label>
                <input type="text" name="judul" value="{{$data->judul}}" placeholder="Masukan judul  " class="form-control" fdprocessedid="bp6kma">
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
                <div class="pl-4">
                    @if($data->image)
                    <div style="width: 150px">
                        <img src="{{asset('portofolioimg/'.$data->image)}}" class="img-preview img-fluid d-blok">
                    </div>
                    @else
                    <div style="width: 150px">
                        <img class="img-preview img-fluid">
                    </div>
                    @endif
                   </div>
            </div>

            <div class="px-2 mb-5 col-md-12">
                <label>Resep</label>
                <textarea name="desk" id="desk">{{$data->desk}}</textarea>
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
