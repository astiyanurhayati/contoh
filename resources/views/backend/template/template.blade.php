@extends('layouts.master')
@section('titleheader', 'Tempalte')
@section('page1', 'Home')
@section('title', ' Template')

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
    <form class="_form" action="{{route('template.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">

            <div class=" card-body col-md-4"> 
                <label for="">Icon Slider</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="icon_slidder" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->icon_slidder)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->icon_slidder)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
           
          
            <div class=" card-body col-md-4"> 
                <label for="">Icon Special</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="icon_special" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->icon_special)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->icon_special)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>


            <div class=" card-body col-md-4"> 
                <label for="">Icon Banner</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="icon_banner" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->icon_banner)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->icon_banner)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
        </div>

        <div class="row">

            <div class=" card-body col-md-4"> 
                <label for="">Bg Special</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg_special" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg_special)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->bg_special)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
           
          
            <div class=" card-body col-md-4"> 
                <label for="">Bg Banner</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg_banner" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg_banner)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->bg_banner)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>


            <div class=" card-body col-md-4"> 
                <label for="">Bg Feature</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg_feature" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg_feature)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->bg_feature)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>
            <div class=" card-body col-md-4"> 
                <label for="">Bg  Recipe</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg_recipe" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg_recipe)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->bg_recipe)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif
            </div>

            <div class=" card-body col-md-4"> 
                <label for="">Bg Footer</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="bg_footer" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg_footer)
                <div style="width: 100px">
                    <img src="{{asset('templateimg/'.$data->bg_footer)}}" class="img-preview img-fluid d-blok">
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
                <label>Judul Special</label>
                <input type="text" name="judul_special"  class="form-control" value="{{$data->judul_special}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Judul Banner</label>
                <input type="text" name="judul_banner" class="form-control" value="{{$data->judul_banner}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>Judul Portofolio</label>
                <input type="text" name="judul_portofolio" class="form-control" value="{{$data->judul_portofolio}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>Judul Testimonial</label>
                <input type="text" name="judul_testimonial"  class="form-control" value="{{$data->judul_testimonial}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Judu Price</label>
                <input type="text" name="judul_price" class="form-control" value="{{$data->judul_price}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>Judul footer 1</label>
                <input type="text" name="judul_footer1" class="form-control" value="{{$data->judul_footer1}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>Judul footer 2</label>
                <input type="text" name="judul_footer2" class="form-control" value="{{$data->judul_footer2}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>btn Feature</label>
                <input type="text" name="btn_feature" class="form-control" value="{{$data->btn_feature}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>btn Banner</label>
                <input type="text" name="btn_banner" class="form-control"  value="{{$data->btn_banner}}" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>btn Price</label>
                <input type="text" name="btn_price" class="form-control" value="{{$data->btn_price}}" fdprocessedid="m7zm6g">
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
