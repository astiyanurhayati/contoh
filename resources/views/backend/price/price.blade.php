@extends('layouts.master')
@section('titleheader', 'Price')
@section('title', 'Price')
@section('page1', 'Home')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('price.create')}}" class="btn btn-primary">
                    <i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah
                </a>
                <div class="card-tools">
                    <form action="{{route('search.price')}}">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="query"  value="{{ request()->query('query') }}"  class="form-control float-right" placeholder="Search">
    
                            <div class="input-group-append">
                                <button type="query" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div></form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Porsi</th>
                            <th>Informasi</th>
                           
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($price as $data )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('priceimg/'.$data->gambar)}}" alt="" width="100px"></td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->portion}}</td>
                            <td>{{$data->information}}</td>
                            
                            <td id="action-31">
                                <a href="{{route('price.edit', $data->id)}}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i>&nbsp;&nbsp;Ubah</a>
                                <form id="deleteForm-{{$data->id}}" action="{{route('price.destroy', $data->id)}}" style="display:inline-block" method="POST" class="deleteForm-{{$data->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirmation({{$data->id}})" class="btn btn-danger btn-sm" fdprocessedid="a3qvej">
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
            {{$price->links('pagination::simple-bootstrap-4')}}
        </div>
        <!-- /.card -->
    </div>
</div>

<script>
    function confirmation(formId) {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengklik "Hapus", submit form
                document.getElementById('deleteForm-' + formId).submit();
            }
        });

        return false; // Mencegah form submit langsung
    }
</script>

@endsection
