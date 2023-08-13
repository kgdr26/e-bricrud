@extends('main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nasabah</h1>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Data Nasabah</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAME</th>
                                <th>ANGGUNAN</th>
                                <th>HARGA</th>
                                <th>USER INPUT</th>
                                <th>TGL INPUT</th>
                                <th>USER APPROVAL</th>
                                <th>TGL APPROVAL</th>
                                <th>STATUS</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>NAME</th>
                                <th>ANGGUNAN</th>
                                <th>HARGA</th>
                                <th>USER INPUT</th>
                                <th>TGL INPUT</th>
                                <th>USER APPROVAL</th>
                                <th>TGL APPROVAL</th>
                                <th>STATUS</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($arr as $key => $value)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->id_anggunan}}</td>
                                    <td>{{'Rp '. number_format($value->harga, 0, ',', '.')}}</td>
                                    <td>{{$value->name_input}}</td>
                                    <td>{{$value->date_input}}</td>
                                    <td>{{$value->name_approv}}</td>
                                    <td>{{$value->date_approval}}</td>
                                    <td class="text-center">
                                        @if($value->id_status == 1)
                                            @php
                                                $bg = 'warning';
                                            @endphp
                                        @elseif($value->id_status == 2)
                                            @php
                                                $bg = 'success';
                                            @endphp
                                        @elseif($value->id_status == 3)
                                            @php
                                                $bg = 'danger';
                                            @endphp
                                        @endif
                                        <span class="btn btn-{{$bg}} btn-icon-split btn-sm"><span class="text">{{$value->name_status}}</span></span>
                                    </td>
                                    <td class="text-center">
                                        @if($idn_user->role_id == 1)
                                            <a href="{{route('actionapprove', ['id' => $value->id])}}" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class='bx bx-check-double'></i>
                                                </span>
                                            </a>
                                        @endif
                                        <a href="{{route('detailnasabah', ['id' => $value->id])}}" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class='bx bxs-info-circle' ></i>
                                            </span>
                                        </a>
                                        @if($idn_user->role_id == 1)
                                            <button type="button" data-name="delete_nasabah" data-item="{{$value->id}}" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class='bx bxs-trash' ></i>
                                                </span>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).on("click", "[data-name='delete_nasabah']", function (e) {
        $('.preloader').show();
        var id_status   = 3;
        var id          = $(this).attr("data-item");
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
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

@stop