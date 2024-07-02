@extends('layouts.master')
@section('titleheader', 'Contact Message')
@section('title', 'Category Recipes')
@section('page1', 'Home')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama </th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item )
                        <tr>
                            <td> {{$loop->iteration}}</td>
                            <td> {{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->message}}</td>
                            <td>{{$item->created_at->format('D, m y')}}</td>
                            <td>
                                <form id="deleteForm-{{$item->id}}" action="{{route('formContact.destroy', $item->id)}}" style="display:inline-block" method="POST" class="deleteForm-{{$item->id}}">
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

        </div>
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
