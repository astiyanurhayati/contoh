@extends('layouts.master')
@section('titleheader', 'General')
@section('page1', 'Home')
@section('title', ' General')

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
        <h3 class="card-title">Update Konfigurasi General </h3>
    </div>
    <form class="_form" action="{{route('general.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-4">
                <label>Facebook</label>
                <input type="text" name="fb" class="form-control" value="{{$data->fb}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Intagram</label>
                <input type="text" name="ig" class="form-control" value="{{$data->ig}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Phone 1</label>
                <input type="text" name="phone1" class="form-control" value="{{$data->phone1}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>WhatsApp</label>
                <input type="text" name="wa" class="form-control" value="{{$data->wa}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{$data->email}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Alamat</label>
                <textarea name="address" class="form-control" id="" cols="2" rows="2">{{$data->address}}</textarea>
            </div>
            <div class="form-group col-md-4">
                <label>Meta Title</label>
                <input type="text" name="title" class="form-control" value="{{$data->title}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label> Meta Keywords</label>
                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" fdprocessedid="bp6kma">
            </div>  
            <div class="form-group col-md-4">
                <label>Meta Search Engine</label>
                <input type="text" name="searchengine" class="form-control" value="{{$data->searchengine}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Author</label>
                <input type="text" name="author" class="form-control" value="{{$data->author}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Website</label>
                <input type="text" name="website" class="form-control" value="{{$data->website}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Copyright</label>
                <input type="text" name="footer" class="form-control" value="{{$data->footer}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Link Copyright</label>
                <input type="text" name="linkfooter" class="form-control" value="{{$data->linkfooter}}" fdprocessedid="bp6kma">
            </div>

            <div class="col-md-4">
                <label for="">Logo 1</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image1" name="logo1" onchange="previewImage('image1', 'preview1')">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->logo1)
                <div style="width: 100px">
                    <img src="{{asset($data->logo1)}}" id="preview1" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img id="preview1" class="img-preview img-fluid">
                </div>
                @endif
            </div>
            <div class="col-md-4">
                <label for="">Logo 2</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image2" name="logo2" onchange="previewImage('image2', 'preview2')">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->logo2)
                <div style="width: 100px">
                    <img src="{{asset($data->logo2)}}" id="preview2" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img id="preview2" class="img-preview img-fluid">
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
    function previewImage(imageId, previewId) {
        const image = document.getElementById(imageId);
        const imgPreview = document.getElementById(previewId);
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
