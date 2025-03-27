@extends('layout.app')
@section('title', 'Product')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Digis</a></li>
                    <li class="breadcrumb-item active">About us</li>
                </ol>
            </div>
            <h4 class="page-title">About us</h4>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="header-title">About us</h4>
        <p class="sub-header">
            
        </p>

        <button type="button" class="btn btn-sm btn-primary float-right waves-effect waves-light" data-toggle="modal"
            data-target="#modalAdd"><i class="mdi mdi-plus-circle"></i> Tambah Product</button>

       
        <table id="tableProduct" class="table dt-responsive table-hover mt-4 text-center justify-center"
            style="width:100%">
            <thead>
                <tr>
                    <th>Created At</th>
                    <th>Nama</th>
                    <th>deskripsi</th>
                    <th>Logo</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
        </table>


    </div>
</div>

<div id="modalAdd" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Tambah Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama">
                        <small class="text-danger" id="errName"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Description">
                        <small class="text-danger" id="errDescription"></small>
                    </div>

               
                    <div class="card text-center p-3">
                        <i class="bi bi-file-earmark-pdf h1 text-primary"></i>
                        <p>Unggah Gambar</p>
                        <input type="file" name="gambar" id="gambar"class="form-control">
                        <small class="text-danger" id="errGambar"></small>
                    </div>

                    



                    <button class="btn btn-sm btn-primary float-right" id="saveProduct">Save</button>
                </div>
            </div>
        </div>
    </div>

{{-- modal delete --}}
<div id="modalDelete" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Hapus Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center align-self-center">
                    <p>Anda yakin ingin menghapus Product ini ?</p>
                </div>
                <div class="modal-footer justify-content-center align-self-center">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btn-sm" id="deleteProduct"
                        onclick="savedeleteProduct(deleteIdProduct)">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="modalEdit" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Ubah Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="nameEdit" placeholder="Nama"
                            value="">
                        <small class="text-danger" id="errNameEdit"></small>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="descriptionEdit" placeholder="Description"
                            value="">
                        <small class="text-danger" id="errDescriptionEdit"></small>
                    </div>
                    <div class="form-group">
                        <i class="bi bi-file-earmark-pdf h1 text-primary"></i>
                            <p>Unggah Gambar</p>
                            <input type="file" name="gambar" id="gambarEdit"class="form-control">
                        <small class="text-danger" id="errGambarEdit"></small>
                    </div>




                    <button class="btn btn-sm btn-primary float-right" id="saveAboutEdit"
                        onclick="saveProductEdit()">Save</button>
                </div>
            </div>
        </div>
    </div>


@push('js')
<script>

        var dataTable = {
                "_token": "{{ csrf_token() }}",
            };

            var table = $('#tableProduct').DataTable({          
                ajax: {
                    "type": "POST",
                    "url": '{!! route('product.table') !!}',
                    "data": function(d) {
                        return $.extend(d, dataTable);
                    },
                },
                columns: [{
                    data: 'created_at'
                }, {
                    data: 'name',
                },{
                    data: 'description',
                },{
                    data: 'gambar',
                }, {
                    data: 'action'
                }, ]
            });

            $('#description').on('input', function() {
                $('#errDescription').text('')
            });
            $('#name').on('input', function() {
                $('#errName').text('')
            });
            $('#gambar').on('input', function() {
                $('#errGambar').text('')
            });




    $('#saveProduct').click(function(e) {
        var description = $('#description').val();
        var name = $('#name').val();
        var gambar = $('#gambar')[0].files[0]; // Get the selected file

        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('description', description);
        formData.append('name', name);
        formData.append('gambar', gambar); 

        $('#saveProduct').addClass('disabled')
        $.ajax({
            url: '{!! route('product.add') !!}',
            data: formData,
            processData: false,  // Required for file uploads
            contentType: false,  // Required for file uploads
            type: 'POST',
            dataType: 'json',
            success: function(resultAdd) {
                $('#saveAbout').removeClass('disabled');
                $("#modalAdd").modal('hide');
                $('#name').val('');
                $('#description').val('');
                $('#gambar').val('');
                table.ajax.reload();
                toastr.success(resultAdd.message)
            },
            error: function(resultAdd) {
                $('#saveAbout').removeClass('disabled');
                let response = resultAdd.responseJSON;
                let all_errors = response.errors;
                $('#errName').text(all_errors.name)
                $('#errDescription').text(all_errors.description)
                $('#errGambar').text(all_errors.gambar)
            }
        });
    });


    deleteProduct = (id) => {
        deleteIdProduct = id;
        $("#modalDelete").modal('show');
    }

    savedeleteProduct = (idDelete) => {
        $('#deleteProduct').addClass('disabled');
        $.ajax({
            url: '{!! route('product.delete') !!}',
            data: {
                '_token': "{{ csrf_token() }}",
                'id_delete': idDelete,
            },
            type: 'POST',
            dataType: 'json',
            success: function(resultAdd) {
                $('#deleteProduct').removeClass('disabled');
                $("#modalDelete").modal('hide');
                table.ajax.reload();
                toastr.success(resultAdd.message)
            }
        });
    }


    // editProduct = (id) => {
    //     EditIdProduct = id;
        
    //     $("#modalEdit").modal('show');
    // }

    // saveProductEdit = () => {
    //     $('#saveProductEdit').addClass('disabled');

    //     var nameEdit = $('#nameEdit').val();
    //     var descriptionEdit = $('#descriptionEdit').val();
    //     var gambarEdit = $('#gambarEdit')[0].files[0];

       



    //     let formData = new FormData();
    //     formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    //     formData.append('description', $('#descriptionEdit').val());
    //     formData.append('name', $('#nameEdit').val());
    //     var gambarEdit = $('#gambarEdit')[0].files[0]; 
    //     if (gambarEdit) {
    //         formData.append('gambar', gambarEdit);
    //     }


    //     $.ajax({
    //         url: '{!! route('product.update') !!}',
    //         data: formData,
    //         type: 'POST',
    //         dataType: 'json',
    //         success: function(resultDetail) {
    //             $('#saveProductEdit').removeClass('disabled');
    //             $("#modalEdit").modal('hide');

    //             // Reset form fields
    //             $('#nameEdit').val('');
    //             $('#descriptionEdit').val('');
    //             $('#gambarEdit').val('');

    //             table.ajax.reload();
    //             toastr.success(resultDetail.message);
    //         },
    //         error: function(resultAdd) {
    //             $('#saveProductEdit').removeClass('disabled');
    //             let response = resultAdd.responseJSON;
    //             let all_errors = response.errors;
    //             $('#errName').text(all_errors.name)
    //             $('#errDescription').text(all_errors.description)
    //             $('#errGambar').text(all_errors.gambar)
    //         }
    //     });
    // };

    function editProduct(id, name, description, gambarUrl) {
    $('#modalEdit').data('id', id); // Store product ID
    $('#nameEdit').val(name);
    $('#descriptionEdit').val(description);

    // Show existing image preview (if needed)
    $('#gambarPreview').attr('src', gambarUrl);

    $('#modalEdit').modal('show');
}



    function saveProductEdit() {
    let formData = new FormData();
    
    let productId = $('#modalEdit').data('id'); // Retrieve product ID
    let nameEdit = $('#nameEdit').val();
    let descriptionEdit = $('#descriptionEdit').val();
    let gambarEdit = $('#gambarEdit')[0].files[0]; // Get file

    formData.append('_token', "{{ csrf_token() }}");
    formData.append('id', productId); // Add product ID
    formData.append('name', nameEdit);
    formData.append('description', descriptionEdit);

    if (gambarEdit) {
        formData.append('gambar', gambarEdit); // Append only if a file is selected
    }

    $.ajax({
        url: '{!! route('product.update') !!}',
        type: 'POST',
        data: formData,
        processData: false,  // Required for FormData
        contentType: false,  // Required for FormData
        dataType: 'json',
        success: function(response) {
            $('#modalEdit').modal('hide'); // Hide modal
            $('#nameEdit').val('');
            $('#descriptionEdit').val('');
            $('#gambarEdit').val('');
            table.ajax.reload(); // Reload DataTable
            toastr.success(response.message);
        },
        error: function(xhr) {
            let errors = xhr.responseJSON.errors;
            $('#errNameEdit').text(errors.name || '');
            $('#errDescriptionEdit').text(errors.description || '');
            $('#errGambarEdit').text(errors.gambar || '');
        }
    });
}

    
    </script>
    @endpush
@endsection