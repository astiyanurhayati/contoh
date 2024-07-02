@extends('layouts.master')
@section('titleheader', 'Edit Price')
@section('page1', 'Home')
@section('title', ' Price')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Price</h3>
    </div>
    <form class="_form" action="{{route('price.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-4">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukan judul" value="{{$data->nama}}" class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Harga</label>
                <input type="text" name="price" placeholder="Masukan Harga" value="{{$data->price}}" class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Keterangan Porsi</label>
                <input type="text" name="portion" placeholder="..." value="{{$data->portion}}" class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-goup col-md-6">
                <label>Informasi Produk</label>
                <select class="custom-select" name="information">
                    <option disabled selected>Pilih informasi harga</option>
                    <option value="none" {{ $data->information == 'none' ? 'selected' : '' }}>None</option>
                    <option value="best" {{ $data->information == 'best' ? 'selected' : '' }}>Best</option>
                </select>
                
            </div>

            <div class="col-md-6">
                <label>Gambar</label>

                <div class="align-items-center input-group">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="image" name="gambar" onchange="previewImage()">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <div class="pl-4 mt-2">
                    @if($data->gambar)
                    <div style="width: 150px">
                        <img src="{{asset('priceimg/'.$data->gambar)}}" class="img-preview img-fluid d-blok">
                    </div>
                    @else
                    <div style="width: 150px">
                        <img class="img-preview img-fluid">
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-8">
                <label for="" class="form-label">Deskripsi</label>
                <table class="table table-bordered" id="hidden">
                    @foreach ((array)json_decode($data->desc) as $key => $item)
                        <tbody class="tri">
                            <tr>
                                <td>
                                    <input type="text" name="desc[{{$key}}]" class="form-control" placeholder="..." value="{{$item}}">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger remove-tr text-white">-</button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    <tbody class="tri">
                        <tr>
                            <td>
                                <input type="text" name="desc[]" class="form-control" placeholder="..." value="">
                            </td>
                            <td>
                                <button type="button" class="btn btn-secondary add-tr text-white">+</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="card-footer">
            <a onclick="return history.go(-1)" class="btn btn-default" id="_backButton">Kembali</a>
            <button type="submit" class="btn btn-primary" id="_button" fdprocessedid="867nk">Simpan</button>
        </div>
    </form>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    var hidden = document.getElementById("hidden");
  
    hidden.addEventListener("click", function(event) {
        var target = event.target;
      
        if (target.classList.contains("add-tr")) {
            var newRow = document.createElement("tr");
            var cell1 = document.createElement("td");
            var input = document.createElement("input");
            input.type = "text";
            input.name = "desc[]";
            input.className = "form-control";
            input.placeholder = "...";
            input.value = "";
            cell1.appendChild(input);
            newRow.appendChild(cell1);
          
            var cell2 = document.createElement("td");
            var button = document.createElement("button");
            button.type = "button";
            button.className = "btn btn-danger remove-tr text-white";
            button.textContent = "-";
            cell2.appendChild(button);
            newRow.appendChild(cell2);
          
            target.closest("tbody").appendChild(newRow);
        }
      
        if (target.classList.contains("remove-tr")) {
            target.closest("tr").remove();
        }
    });
});

</script>
<script>
    var editorClass = ['desk'];
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
