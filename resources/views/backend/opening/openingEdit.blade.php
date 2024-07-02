@extends('layouts.master')
@section('titleheader', 'Create Opening')
@section('page1', 'Blog')
@section('title', ' Blog')

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
        <h3 class="card-title">Tambah Jam Buka</h3>
    </div>
    <form class="_form" action="{{route('opening.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label>Hari</label>
                <input type="text" name="hari" placeholder="Senin" class="form-control @error('hari') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{$data->hari}}" >
                @error('hari')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Jam</label>
                <input type="text" name="jam" placeholder="08.00 - 10.000" class="form-control @error('jam') is-invalid @enderror" fdprocessedid="bp6kma" required value="{{$data->jam}}" >
                @error('jam')
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
