@extends('layouts.master')
@section('titleheader', 'Create Sub Menu')
@section('page1', 'Home')
@section('title', ' Sub Menu')

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
        <h3 class="card-title">Tambah Sub Menu</h3>
    </div>
    <form class="_form" action="{{route('sub-menu.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-goup col-md-4">
                <label>Main Menu</label>
                <select class="custom-select" name="mainmenu_id">
                    <option selected disabled>Pilih Main Menu</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option> 
                    @endforeach
                   
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Nama</label>
                <input type="text" name="name" placeholder="Masukan nama sub menu" class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Title Header</label>
                <input type="text" name="title" placeholder="Masukan title header" class="form-control" fdprocessedid="m7zm6g">
            </div>
            <div class="form-group col-md-4">
                <label>URl</label>
                <input type="text" name="url" placeholder="Masukan title header" class="form-control" fdprocessedid="m7zm6g">
            </div>
            

            <div class="custom-control custom-switch ml-2">
                <input type="checkbox" class="custom-control-input" name="show" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1" >Tampilkan halaman</label>
              </div>
            
        </div>
        <img id="image-preview" src="" alt="Image Preview" width="150px" class="ml-3 mb-3" hidden>
        <div class="card-footer">
            <a onclick="return history.go(-1)" class="btn btn-default" id="_backButton">Kembali</a>
            <button type="submit" class="btn btn-primary" id="_button" fdprocessedid="867nk">Simpan</button>
          </div>
    </form>
</div>

@endsection
