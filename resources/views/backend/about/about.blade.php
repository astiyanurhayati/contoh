@extends('layouts.master')
@section('titleheader', 'About')
@section('page1', 'Home')
@section('title', ' About')

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
        <h3 class="card-title">Update About </h3>
    </div>
    <form class="_form" action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Judul 1</label>
                <input type="text" name="judul1" class="form-control" value="{{$data->judul1}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 1</label>
                <textarea name="desk1" class="form-control" id="" cols="2" rows="2">{{$data->desk1}}</textarea>
            </div>

            <div class="form-group col-md-6">
                <label>Judul 2</label>
                <input type="text" name="judul2" class="form-control" value="{{$data->judul2}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 2</label>
                <textarea name="desk2" class="form-control" id="" cols="2" rows="2">{{$data->desk2}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Judul 3</label>
                <input type="text" name="judul3" class="form-control" value="{{$data->judul3}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 3 </label>
                <textarea name="desk3" class="form-control" id="" cols="2" rows="2">{{$data->desk3}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Judul 4</label>
                <input type="text" name="judul4" class="form-control" value="{{$data->judul4}}" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 4</label>
                <textarea name="desk4" class="form-control" id="" cols="2" rows="2">{{$data->desk4}}</textarea>
            </div>

            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 4 (1)</label>
                <textarea name="desk5" class="form-control" id="" cols="2" rows="2">{{$data->desk5}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 4 (2)</label>
                <textarea name="desk6" class="form-control" id="" cols="2" rows="2">{{$data->desk6}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Deskrispsi Judul 4 (3)</label>
                <textarea name="desk6" class="form-control" id="" cols="2" rows="2">{{$data->desk7}}</textarea>
            </div>


            <div class="form-group col-md-6">
                <label>Owner Name</label>
                <input type="text" name="owner_name" class="form-control" value="" fdprocessedid="bp6kma">
            </div>
           
            <div class="form-group col-md-6">
                <label>Owner Title</label>
                <input type="text" name="owner_title" class="form-control" value="" fdprocessedid="bp6kma">
            </div>
            <div class=" col-md-6">
                <label for="">Ower Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg1" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->owner)
                <div style="width: 100px">
                    <img src="{{asset('aboutimg/'.$data->owner)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif

            </div>
           
           

            <div class=" card-body col-md-6">
                <label for="">Background 1</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg1" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg1)
                <div style="width: 200px">
                    <img src="{{asset('aboutimg/'.$data->bg1)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif

            </div>
            <div class=" card-body col-md-6">
                <label for="">Background 2</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg2" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg2)
                <div style="width: 200px">
                    <img src="{{asset('aboutimg/'.$data->bg2)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif

            </div>

            <div class=" card-body col-md-6">
                <label for="">Background 3</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg3" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg3)
                <div style="width: 200px">
                    <img src="{{asset('aboutimg/'.$data->bg3)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif

            </div>
            <div class=" card-body col-md-6">
                <label for="">Background 4</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg4" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg4)
                <div style="width: 200px">
                    <img src="{{asset('aboutimg/'.$data->bg4)}}" class="img-preview img-fluid d-blok">
                </div>
                @else
                <div style="width: 150px">
                    <img class="img-preview img-fluid">
                </div>
                @endif

            </div>
            <div class=" card-body col-md-6">
                <label for="">Background 5</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="bg6" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @if($data->bg5)
                <div style="width: 200px">
                    <img src="{{asset('aboutimg/'.$data->bg5)}}" class="img-preview img-fluid d-blok">
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