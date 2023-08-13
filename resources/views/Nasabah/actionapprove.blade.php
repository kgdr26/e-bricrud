@extends('main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nasabah</h1>
</div>

<div class="row">
    <input type="hidden" value="{{$idn_user->id}}" data-name="id_approval">
    <div class="col-12">
        <form action="#" method="POST" id="AddFormAction" enctype="multipart/form-data">
            <div class="card mb-4">
                <div class="card-header">
                    Approved Nasabah
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" data-name="name" placeholder="Name" value="{{$arr['row']->name}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No Tlp</label>
                                <input type="text" class="form-control" data-name="no_tlp" placeholder="NO TLP" value="{{$arr['row']->no_tlp}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No KTP</label>
                                <input type="text" class="form-control" data-name="no_ktp" placeholder="NO KTP" value="{{$arr['row']->no_ktp}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload KTP</label>
                                <input type="file" class="form-control" data-name="upload_ktp" id="upload_ktp" placeholder="Upload KTP" value="{{$arr['row']->upload_ktp}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No KK</label>
                                <input type="text" class="form-control" data-name="no_kk" placeholder="No KK" value="{{$arr['row']->no_kk}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" data-name="upload_kk" id="upload_kk" placeholder="Upload KK" value="{{$arr['row']->upload_kk}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <textarea name=""  class="form-control" cols="30" rows="10" data-name="alamat" value="{{$arr['row']->alamat}}" disabled>{{$arr['row']->alamat}}</textarea disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No NPWP</label>
                                <input type="text" class="form-control" data-name="no_npwp" placeholder="No NPWP" value="{{$arr['row']->no_npwp}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload NPWP</label>
                                <input type="file" class="form-control" data-name="upload_npwp" id="upload_npwp" placeholder="Upload NPWP" value="{{$arr['row']->upload_npwp}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Buku Nikah</label>
                                <input type="file" class="form-control" data-name="upload_bukunikah" id="upload_bukunikah" placeholder="Upload Buku Nikah" value="{{$arr['row']->upload_bukunikah}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Slip Gaji</label>
                                <input type="file" class="form-control" data-name="upload_slipgaji" id="upload_slipgaji" placeholder="Upload Slip Gaji" value="{{$arr['row']->upload_slipgaji}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Rekening Koran</label>
                                <input type="file" class="form-control" data-name="upload_rek" id="upload_rek" placeholder="Upload Rekening Koran" value="{{$arr['row']->upload_rek}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Agunan</label>
                                <select data-name="id_anggunan" class="form-select select-2" disabled>
                                    <option value="">-- Select Role --</option>
                                    <option value="1" selected>KPR</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" data-name="harga" id="harga" placeholder="Harga" value="{{$arr['row']->harga}}" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">KTP</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexktp" name="check_ktp">
                                        <label class="form-check-label" for="flexktp">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_ktp)}}" alt="" id="show_upload_ktp">
                                        <input type="text" class="name_image" name="" id="name_upload_ktp" value="{{$arr['row']->upload_ktp}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">KK</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexkk" name="check_kk">
                                        <label class="form-check-label" for="flexkk">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_kk)}}" alt="" id="show_upload_kk">
                                        <input type="text" class="name_image" name="" id="name_upload_kk" value="{{$arr['row']->upload_kk}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">NPWP</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexnpwp" name="check_npwp">
                                        <label class="form-check-label" for="flexnpwp">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_npwp)}}" alt="" id="show_upload_npwp">
                                        <input type="text" class="name_image" name="" id="name_upload_npwp" value="{{$arr['row']->upload_npwp}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Buku Nikah</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexbukunikah" name="check_bukunikah">
                                        <label class="form-check-label" for="flexbukunikah">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_bukunikah)}}" alt="" id="show_upload_bukunikah">
                                        <input type="text" class="name_image" name="" id="name_upload_bukunikah" value="{{$arr['row']->upload_bukunikah}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Slip Gaji</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexslipgaji" name="check_slipgaji">
                                        <label class="form-check-label" for="flexslipgaji">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_slipgaji)}}" alt="" id="show_upload_slipgaji">
                                        <input type="text" class="name_image" name="" id="name_upload_slipgaji" value="{{$arr['row']->upload_slipgaji}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Rekening Koran</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="felxrek" name="check_rek">
                                        <label class="form-check-label" for="felxrek">
                                          Approved
                                        </label>
                                    </div>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_rek)}}" alt="" id="show_upload_rek">
                                        <input type="text" class="name_image" name="" id="name_upload_rek" value="{{$arr['row']->upload_rek}}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" data-name="delete_nasabah" data-item="{{$arr['row']->id}}" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class='bx bxs-save'></i>
                        </span>
                        <span class="text">Not Approved Data</span>
                    </button>
                    &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-success btn-icon-split" data-name="save_data" data-item="{{$arr['row']->id}}">
                        <span class="icon text-white-50">
                            <i class='bx bxs-save'></i>
                        </span>
                        <span class="text">Approved Data</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

<script>
    $(document).on("click", "[data-name='delete_nasabah']", function (e) {
        $('.preloader').show();
        var id_status   = 3;
        var id          = $(this).attr("data-item");
        // alert(id);
        var table       = 'trx_nasabah';
        var whr         = 'id';
        var dats        = {id_status:id_status};
        $.ajax({
            type: "POST",
            url: "{{route('edit')}}",
            data: {id:id,table:table,dats:dats,whr:whr},
            cache: false,
            success: function (res) {
                // console.log(res)
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
        })
    });
</script>

<script>
    $(document).on("click", "[data-name='save_data']", function (e) {
        $('.preloader').show();
        var id_approval   = $("[data-name='id_approval']").val();
        var apr_ktp       = $("input[name='check_ktp']:checked").val();
        var apr_kk        = $("input[name='check_kk']:checked").val();
        var apr_npwp      = $("input[name='check_npwp']:checked").val();
        var apr_bukunikah = $("input[name='check_bukunikah']:checked").val();
        var apr_slip_gaji  = $("input[name='check_slipgaji']:checked").val();
        var apr_rek       = $("input[name='check_rek']:checked").val();
        var approved_data   = parseInt(apr_ktp)+parseInt(apr_kk)+parseInt(apr_npwp)+parseInt(apr_bukunikah)+parseInt(apr_slip_gaji)+parseInt(apr_rek);

        if(approved_data == 6){
            var id_status = 2;
        }else{
            var id_status = 1;
        }
        var id          = $(this).attr("data-item");
        // alert(id);
        var table       = 'trx_nasabah';
        var whr         = 'id';
        var dats        = {id_status:id_status,apr_ktp:apr_ktp,apr_kk:apr_kk,apr_npwp:apr_npwp,apr_bukunikah:apr_bukunikah,apr_slip_gaji:apr_slip_gaji,apr_rek:apr_rek};
        $.ajax({
            type: "POST",
            url: "{{route('edit')}}",
            data: {id:id,table:table,dats:dats,whr:whr},
            cache: false,
            success: function (res) {
                // console.log(res)
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((data) => {
                    // location.reload();
                    window.location.href = "{{ route('list_nasabah')}}";
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
        })
        
    });
</script>

@stop