@extends('layout.app')
@section('title', 'Contact')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Digis</a></li>
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div>
                <h4 class="page-title">Contacts</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Contacts</h4>
            <p class="sub-header">
                
            </p>

            <button type="button" class="btn btn-sm btn-primary float-right waves-effect waves-light" data-toggle="modal"
                data-target="#modalAdd"><i class="mdi mdi-plus-circle"></i> Tambah Contact</button>

           
            <table id="tableContact" class="table dt-responsive table-hover mt-4 text-center justify-center"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Created At</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Phone</th>
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
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama">
                        <small class="text-danger" id="errName"></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                        <small class="text-danger" id="errEmail"></small>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="phone">
                        <small class="text-danger" id="errPhone"></small>
                    </div>
                    



                    <button class="btn btn-sm btn-primary float-right" id="saveContact">Save</button>
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
                    <h4 class="modal-title" id="myCenterModalLabel">Hapus Contact</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center align-self-center">
                        <p>Anda yakin ingin menghapus Contact ini ?</p>
                    </div>
                    <div class="modal-footer justify-content-center align-self-center">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger btn-sm" id="deleteAbout"
                            onclick="savedeleteContact(deleteIdContact)">Save
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
                    <h4 class="modal-title" id="myCenterModalLabel">Ubah Contact</h4>
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
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="emailEdit" placeholder="Email"
                            value="">
                        <small class="text-danger" id="errEmailEdit"></small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phoneEdit" placeholder="Phone"
                            value="">
                        <small class="text-danger" id="errPhoneEdit"></small>
                    </div>




                    <button class="btn btn-sm btn-primary float-right" id="saveAboutEdit"
                        onclick="saveContactEdit()">Save</button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            var dataTable = {
                "_token": "{{ csrf_token() }}",
            };

            var table = $('#tableContact').DataTable({          
                ajax: {
                    "type": "POST",
                    "url": '{!! route('contact.table') !!}',
                    "data": function(d) {
                        return $.extend(d, dataTable);
                    },
                },
                columns: [{
                    data: 'created_at'
                }, {
                    data: 'name',
                }, {
                    data: 'email',
                }, {
                    data: 'phone',
                }, {
                    data: 'action'
                }, ]
            });


            // hidden error on type input
            $('#name').on('input', function() {
                $('#errName').text('')
            });
            $('#email').on('input', function() {
                $('#errEmail').text('')
            });
            $('#phone').on('input', function() {
                $('#errPhone').text('')
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


            $('#saveContact').click(function(e) {
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                $('#saveAbout').addClass('disabled')
                $.ajax({
                    url: '{!! route('contact.add') !!}',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'name': name,
                        'email': email,
                        'phone': phone,
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(resultAdd) {
                        $('#saveAbout').removeClass('disabled');
                        $("#modalAdd").modal('hide');
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        table.ajax.reload();
                        toastr.success(resultAdd.message)
                    },
                    error: function(resultAdd) {
                        $('#saveAbout').removeClass('disabled');
                        let response = resultAdd.responseJSON;
                        let all_errors = response.errors;
                        $('#errName').text(all_errors.name)
                        $('#errEmail').text(all_errors.email)
                        $('#errPhone').text(all_errors.phone)
                    }
                });
            });

            deleteContact = (id) => {
                deleteIdContact = id;
                $("#modalDelete").modal('show');
            }

            savedeleteContact = (idDelete) => {
                $('#deleteContact').addClass('disabled');
                $.ajax({
                    url: '{!! route('contact.delete') !!}',
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


            editContact = (id) => {
                EditIdContact = id;
                $("#modalEdit").modal('show');
            }

            saveContactEdit = () => {
                $('#saveContactEdit').addClass('disabled');

                var nameEdit = $('#nameEdit').val();
                var emailEdit = $('#emailEdit').val();
                var phoneEdit = $('#phoneEdit').val();

                $.ajax({
                    url: '{!! route('contact.update') !!}',
                    data: {
                        'id': EditIdContact,
                        '_token': "{{ csrf_token() }}",
                        'name': nameEdit, 
                        'email': emailEdit,
                        'phone': phoneEdit,
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(resultDetail) {
                        $('#saveAboutEdit').removeClass('disabled');
                        $("#modalEdit").modal('hide');

                        // Reset form fields
                        $('#nameEdit').val('');
                        $('#emailEdit').val('');
                        $('#phoneEdit').val('');

                        table.ajax.reload();
                        toastr.success(resultDetail.message);
                    },
                    error: function(resultAdd) {
                        $('#saveContactEdit').removeClass('disabled');
                        let response = resultAdd.responseJSON;
                        let all_errors = response.errors;
                        $('#errName').text(all_errors.name)
                        $('#errEmail').text(all_errors.email)
                        $('#errPhone').text(all_errors.phone)
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
