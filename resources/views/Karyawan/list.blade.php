@extends('main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Data Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>Role</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>ROLE</th>
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
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->username}}</td>
                                    <td>*******</td>
                                    <td>{{$value->role_name}}</td>
                                    <td class="text-center">
                                        <a href="{{route('editprofile', ['id' => $value->id])}}" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class='bx bxs-edit-alt'></i>
                                            </span>
                                        </a>
                                        <button class="btn btn-danger btn-icon-split" data-name="delete_data" data-item="{{$value->id}}">
                                            <span class="icon text-white-50">
                                                <i class='bx bxs-trash'></i>
                                            </span>
                                        </button>
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
    $(document).on("click", "[data-name='delete_data']", function (e) {
        $('.preloader').show();
        var is_active   = 2;
        var id          = $(this).attr("data-item");
        var table       = 'users';
        var whr         = 'id';
        var dats        = {is_active:is_active};
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