@extends('layouts.master')
@section('titleheader', 'Edit Blog')
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
        <h3 class="card-title">Edit Blog</h3>
    </div>
    <form class="_form" action="{{route('blog.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row align-items-start">
            <div class="form-group col-md-6">
                <label>Judul Blog</label>
                <input type="text" name="judul" placeholder="Masukan judul" class="form-control @error('judul') is-invalid @enderror" value="{{$data->judul}}">
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-goup col-md-6">
                <label>Kategori Blog</label>
                <select class="custom-select @error('categoryblog_id') is-invalid @enderror" name="categoryblog_id" >
                    <option selected disabled>Pilih Kategori Resep</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}" {{ $category->id == $data->categoryblog_id ? 'selected' : '' }}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-12 mt-3">
                <label>Deskripsi Singkat</label>
                <textarea name="excerpt" class="form-control @error('excerpt') is-invalid @enderror"" id="" cols="2" rows="2">{{$data->excerpt}}</textarea>
                @error('excerpt')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <label>Body</label>
                <textarea name="body" class="@error('body') is-invalid @enderror" id="body">{{$data->body}}</textarea>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group col-md-6 mt-3">
                <label>Label</label>
                <textarea name="label" class="form-control @error('label') is-invalid @enderror"" id="" cols="2" rows="2">{{$data->label}}</textarea>
                @error('label')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6 mt-3">
                <label>Meta Keyword</label>
                <textarea name="meta_key" class="form-control @error('mata_key') is-invalid @enderror"" id="" cols="2" rows="2">{{$data->meta_key}}</textarea>
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
                @if($data->gambar)
                <div style="width: 150px">
                    <img src="{{asset('blogimg/'.$data->gambar)}}" class="img-preview img-fluid d-blok">
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
    var editorClass = ['body'];
    editorClass.forEach(e => {
        CKEDITOR.replace(e, {
            filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}"
            , filebrowserUploadMethod: 'form'
        })
    });

</script>
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
