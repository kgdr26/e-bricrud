@extends('main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nasabah</h1>
</div>

<div class="row">

    <div class="col-12">
        <form action="#" method="POST" id="AddFormAction" enctype="multipart/form-data">
            <div class="card mb-4">
                <div class="card-header">
                    Input Data Nasabah
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" data-name="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No Tlp</label>
                                <input type="text" class="form-control" data-name="no_tlp" placeholder="NO TLP">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No KTP</label>
                                <input type="text" class="form-control" data-name="no_ktp" placeholder="NO KTP">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload KTP</label>
                                <input type="file" class="form-control" data-name="upload_ktp" id="upload_ktp" placeholder="Upload KTP">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No KK</label>
                                <input type="text" class="form-control" data-name="no_kk" placeholder="No KK">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" data-name="upload_kk" id="upload_kk" placeholder="Upload KK">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <textarea name=""  class="form-control" cols="30" rows="10" data-name="alamat"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No NPWP</label>
                                <input type="text" class="form-control" data-name="no_npwp" placeholder="No NPWP">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload NPWP</label>
                                <input type="file" class="form-control" data-name="upload_npwp" id="upload_npwp" placeholder="Upload NPWP">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Buku Nikah</label>
                                <input type="file" class="form-control" data-name="upload_bukunikah" id="upload_bukunikah" placeholder="Upload Buku Nikah">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Slip Gaji</label>
                                <input type="file" class="form-control" data-name="upload_slipgaji" id="upload_slipgaji" placeholder="Upload Slip Gaji">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Rekening Koran</label>
                                <input type="file" class="form-control" data-name="upload_rek" id="upload_rek" placeholder="Upload Rekening Koran">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Agunan</label>
                                <select data-name="id_anggunan" class="form-select select-2">
                                    <option value="">-- Select Jenis Agunan --</option>
                                    @foreach($anggunan as $key => $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" data-name="harga" id="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">KTP</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_ktp">
                                        <input type="text" class="name_image" name="" id="name_upload_ktp" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">KK</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_kk">
                                        <input type="text" class="name_image" name="" id="name_upload_kk" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">NPWP</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_npwp">
                                        <input type="text" class="name_image" name="" id="name_upload_npwp" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Buku Nikah</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_bukunikah">
                                        <input type="text" class="name_image" name="" id="name_upload_bukunikah" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Slip Gaji</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_slipgaji">
                                        <input type="text" class="name_image" name="" id="name_upload_slipgaji" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Rekening Koran</label>
                                    <div class="card-doc-1">
                                        <img src="" alt="" id="show_upload_rek">
                                        <input type="text" class="name_image" name="" id="name_upload_rek" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class='bx bxs-save'></i>
                        </span>
                        <span class="text" data-name="save_data">Save Data</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

<script>
    $(function() {
        $('#harga').maskMoney({
            prefix: 'Rp ',
            thousands: '.',
            decimal: ',',
            precision: 0
        });
    });

    $(document).on("click", "[data-name='save_data']", function (e) {
        $('.preloader').show();
        var name                = $("[data-name='name']").val();
        var no_tlp              = $("[data-name='no_tlp']").val();
        var no_ktp              = $("[data-name='no_ktp']").val();
        var upload_ktp          = $("#name_upload_ktp").val();
        var no_kk               = $("[data-name='no_kk']").val();
        var upload_kk           = $("#name_upload_kk").val();
        var alamat              = $("[data-name='alamat']").val();
        var no_npwp             = $("[data-name='no_npwp']").val();
        var upload_npwp         = $("#name_upload_npwp").val();
        var upload_bukunikah    = $("#name_upload_bukunikah").val();
        var upload_slipgaji     = $("#name_upload_slipgaji").val();
        var upload_rek          = $("#name_upload_rek").val();
        var id_anggunan         = $("[data-name='id_anggunan']").val();
        var harga               = $("[data-name='harga']").val();

        $.ajax({
            type: "POST",
            url: "{{ route('add_nasabah') }}",
            data: {name:name,
                no_tlp:no_tlp,
                no_ktp:no_ktp,
                upload_ktp:upload_ktp,
                no_kk:no_kk,
                upload_kk:upload_kk,
                alamat:alamat,
                no_npwp:no_npwp,
                upload_npwp:upload_npwp,
                upload_bukunikah:upload_bukunikah,
                upload_slipgaji:upload_slipgaji,
                upload_rek:upload_rek,
                id_anggunan:id_anggunan,
                harga:harga
            },
            cache: false,
            success: function(data) {
                // console.log(data);
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((data) => {
                    location.reload();
                })
            },            
            error: function (data) {
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        });
    });

    $("[data-name='upload_ktp']").on("change", function(e){
        var ext = $("[data-name='upload_ktp']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_ktp').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_ktp').val(res);
                }
            })

        }
    });

    $("[data-name='upload_kk']").on("change", function(e){
        var ext = $("[data-name='upload_kk']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_kk').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_kk').val(res);
                }
            })

        }
    });

    $("[data-name='upload_npwp']").on("change", function(e){
        var ext = $("[data-name='upload_npwp']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_npwp').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_npwp').val(res);
                }
            })

        }
    });

    $("[data-name='upload_bukunikah']").on("change", function(e){
        var ext = $("[data-name='upload_bukunikah']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_bukunikah').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_bukunikah').val(res);
                }
            })

        }
    });

    $("[data-name='upload_slipgaji']").on("change", function(e){
        var ext = $("[data-name='upload_slipgaji']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_slipgaji').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_slipgaji').val(res);
                }
            })

        }
    });

    $("[data-name='upload_rek']").on("change", function(e){
        var ext = $("[data-name='upload_rek']").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_upload_rek').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_doc')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#name_upload_rek').val(res);
                }
            })

        }
    });
</script>

{{-- Select2 --}}
<script>
    $(".select-2").select2({
        allowClear: false,
        width: '100%',
    });
</script>
{{-- End Select2 --}}

@stop