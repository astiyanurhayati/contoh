@extends('layouts.master')
@section('titleheader', 'Iklan Blog ')
@section('title', 'Iklan Blog')
@section('page1', 'Home')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('iklan.create')}}" class="btn btn-primary">
                    <i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah
                </a>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $iklan )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('iklanblogimg/'.$iklan->gambar)}}" alt="" width="100px"></td>
                            <td>{{$iklan->nama}}</td>
                           
                            <td id="action-31">
                                <a href="{{route('iklan.edit', $iklan->id)}}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i>&nbsp;&nbsp;Ubah</a>
                                <form id="deleteForm-{{$iklan->id}}" action="{{route('iklan.destroy', $iklan->id)}}" style="display:inline-block" method="POST" class="deleteForm-{{$iklan->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirmation({{$iklan->id}})" class="btn btn-danger btn-sm" fdprocessedid="a3qvej">
                                        <i class="fas fa-trash-alt mr-1" aria-hidden="true"></i>
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<script>
    function confirmation(formId) {
        Swal.fire({
            title: 'Konfirmasi'
            , text: 'Apakah Anda yakin ingin menghapus data ini?'
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Hapus'
            , cancelButtonText: 'Batal'
            , confirmButtonColor: '#dc3545'
            , cancelButtonColor: '#6c757d'
        , }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengklik "Hapus", submit form
                document.getElementById('deleteForm-' + formId).submit();
            }
        });

        return false; // Mencegah form submit langsung
    }

</script>

@endsection
