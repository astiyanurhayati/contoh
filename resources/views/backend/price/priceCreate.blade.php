@extends('layouts.master')
@section('titleheader', 'Create Price')
@section('page1', 'Price')
@section('title', ' Price')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Price</h3>
    </div>
    <form class="_form" action="{{route('price.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="form-group col-md-4">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukan judul  " class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Harga</label>
                <input type="text" name="price" placeholder="Masukan Harga  " class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-group col-md-4">
                <label>Keterangan Porsi</label>
                <input type="text" name="portion" placeholder="..." class="form-control" fdprocessedid="bp6kma">
            </div>
            <div class="form-goup col-md-6">
                <label>Informasi Produk</label>
                <select class="custom-select" name="information">
                    <option selected disabled>Pilih informasi harga</option>
                    <option value="none">None</option>
                    <option value="best">Best</option>
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
                <img id="image-preview" src="" alt="Image Preview" width="150px" class="ml-3 mb-3" hidden>
            </div>

            <div class="col-md-8">
                <label for="" class="form-label">Deskripsi</label>
                <table class="table table-bordered" id="hidden">
                    <tbody class="tri">
                        <tr>
                            <td><input type="text" name="desc[]" class="form-control" placeholder="input sub"></td>
                            <td><button type="button" class="btn btn-secondary" id="create">+</button></td>
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
        const createButton = document.getElementById("create");
        createButton.addEventListener("click", function() {
            const input = document.createElement("input");
            input.type = "text";
            input.name = "desk[]";
            input.placeholder = "input sub";
            input.className = "form-control";

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.className = "btn btn-danger remove-tr text-white";
            removeButton.textContent = "-";

            const newRow = document.createElement("tr");
            newRow.innerHTML = `<td><input type="text" name="desc[]" placeholder="input sub" class="form-control" /></td>
                        <td><button type="button" class="btn btn-danger remove-tr text-white">-</button></td>`;

            newRow.querySelector(".remove-tr").addEventListener("click", function() {
                newRow.remove();
            });  

            document.querySelector(".tri").appendChild(newRow);
        });

        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("remove-tr")) {
                const tr = event.target.closest("tr");
                tr.remove();
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

        var preview = document.querySelector('#image-preview');
        var file = document.querySelector('#image').files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            preview.hidden = false;
            reader.readAsDataURL(file);
        } else {
            preview.hidden = true;
            preview.src = "";
        }
    }

</script>
@endsection
