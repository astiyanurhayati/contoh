@extends('layouts.master')
@section('titleheader', 'Create Category Portofolio')
@section('page1', 'Portofolio')
@section('title', ' Portofolio')

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
        <h3 class="card-title">Tambah Portofolio</h3>
    </div>
    <form class="_form" action="{{route('category-porto.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Nama</label>
                <input type="text" name="name" placeholder="Masukan nama kategori" class="form-control @error('name') is-invalid @enderror" required value="{{old('judul')}}" >
                @error('name')
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

@endsection
