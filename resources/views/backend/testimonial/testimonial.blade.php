@extends('layouts.master')
@section('titleheader', 'Testimonial')
@section('title', 'Testimonial')
@section('page1', 'Home')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('testimonial.create')}}" class="btn btn-primary">
                    <i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah
                </a>
                <div class="card-tools">
                    <form action="{{route('search.testimonial')}}">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="query" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $testimonials as $item )
                            
                       
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('testimonialimg/'.$item->image)}}" width="100px" alt=""></td>
                            <td>{{$item->judul}}</td>
                            <td>{{Str::limit($item->desk, 50, "..")}}</td>
                            <td id="action-31">
                                <a href="{{route('testimonial.edit', $item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i>&nbsp;&nbsp;Ubah</a>
                                <form id="deleteForm-{{$item->id}}" action="{{route('testimonial.destroy', $item->id)}}" style="display:inline-block" method="POST" class="deleteForm-{{$item->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirmation({{$item->id}})" class="btn btn-danger btn-sm" fdprocessedid="a3qvej">
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
            {{$testimonials->links('pagination::bootstrap-4')}}
            <!-- /.card-body -->
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
