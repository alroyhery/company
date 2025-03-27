@extends('layout.app')
@section('title', 'About us')
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
                data-target="#modalAdd"><i class="mdi mdi-plus-circle"></i> Tambah About</button>

           
            <table id="tableAbout" class="table dt-responsive table-hover mt-4 text-center justify-center"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Created At</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>


        </div>
    </div>

    {{-- modal add bpr --}}
    <div id="modalAdd" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Tambah About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Description">
                        <small class="text-danger" id="errDescription"></small>
                    </div>
                    



                    <button class="btn btn-sm btn-primary float-right" id="saveAbout">Save</button>
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
                    <h4 class="modal-title" id="myCenterModalLabel">Hapus About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center align-self-center">
                        <p>Anda yakin ingin menghapus ?</p>
                    </div>
                    <div class="modal-footer justify-content-center align-self-center">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger btn-sm" id="deleteAbout"
                            onclick="savedeleteAbout(deleteIdAbout)">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div id="modalEdit" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Ubah About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="no_surat">Description</label>
                        <input type="text" class="form-control" id="descriptionEdit" placeholder="Description"
                            value="">
                        <small class="text-danger" id="errDescriptionEdit"></small>
                    </div>




                    <button class="btn btn-sm btn-primary float-right" id="saveAboutEdit"
                        onclick="saveAboutEdit()">Save</button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            var dataTable = {
                "_token": "{{ csrf_token() }}",
            };

            var table = $('#tableAbout').DataTable({          
                ajax: {
                    "type": "POST",
                    "url": '{!! route('about.table') !!}',
                    "data": function(d) {
                        return $.extend(d, dataTable);
                    },
                },
                columns: [{
                    data: 'created_at'
                }, {
                    data: 'description',
                }, {
                    data: 'action'
                }, ]
            });


            // hidden error on type input
            $('#description').on('input', function() {
                $('#errDescription').text('')
            });
            $('#lokasi').on('input', function() {
                $('#errLokasi').text('')
            });
            $('#kode_ojk').on('input', function() {
                $('#errKodeOjk').text('')
            });
            $('#no_surat').on('input', function() {
                $('#errNoSurat').text('')
            });
            $('#alamat_website').on('input', function() {
                $('#errAlamatWebsite').text('')
            });


            $('#saveAbout').click(function(e) {
                var description = $('#description').val();
                $('#saveAbout').addClass('disabled')
                $.ajax({
                    url: '{!! route('about.add') !!}',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'description': description
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(resultAdd) {
                        $('#saveAbout').removeClass('disabled');
                        $("#modalAdd").modal('hide');
                        $('#description').val('');
                        table.ajax.reload();
                        toastr.success(resultAdd.message)
                    },
                    error: function(resultAdd) {
                        $('#saveAbout').removeClass('disabled');
                        let response = resultAdd.responseJSON;
                        let all_errors = response.errors;
                        $('#errDescription').text(all_errors.description)
                    }
                });
            });

            deleteAbout = (id) => {
                deleteIdAbout = id;
                $("#modalDelete").modal('show');
            }

            savedeleteAbout = (idDelete) => {
                $('#deleteAbout').addClass('disabled');
                $.ajax({
                    url: '{!! route('about.delete') !!}',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id_delete': idDelete,
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(resultAdd) {
                        $('#deleteAbout').removeClass('disabled');
                        $("#modalDelete").modal('hide');
                        table.ajax.reload();
                        toastr.success(resultAdd.message)
                    }
                });
            }


            editAbout = (id) => {
                EditIdAbout = id;
                $("#modalEdit").modal('show');
            }

            saveAboutEdit = () => {
                $('#saveAboutEdit').addClass('disabled');

                var descriptionEdit = $('#descriptionEdit').val();

                $.ajax({
                    url: '{!! route('about.update') !!}',
                    data: {
                        'id': EditIdAbout,
                        '_token': "{{ csrf_token() }}",
                        'description': descriptionEdit, // ID of selected bank
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(resultDetail) {
                        $('#saveAboutEdit').removeClass('disabled');
                        $("#modalEdit").modal('hide');

                        // Reset form fields
                        $('#descriptionEdit').val('');

                        table.ajax.reload();
                        toastr.success(resultDetail.message);
                    },
                    error: function(resultAdd) {
                        $('#saveAboutEdit').removeClass('disabled');
                        let response = resultAdd.responseJSON;
                        let all_errors = response.errors;
                        $('#errDescriptionEdit').text(all_errors.description);
                    }
                });
            };
            
        </script>

        <style>
            .custom-margin {
                margin-right: 180px !important;
            }
        </style>
    @endpush
@endsection
