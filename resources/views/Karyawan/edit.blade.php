@extends('main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
</div>

<div class="row">

    <div class="col-12">
        <form action="#" method="POST" id="AddFormAction" enctype="multipart/form-data">
            <div class="card mb-4">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" data-name="name" placeholder="Name" value="{{$arr['row']->name}}">
                                <input type="hidden" data-name="id_user" value="{{$arr['row']->id}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" data-name="email" placeholder="Email" value="{{$arr['row']->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Role</label>
                                <select data-name="role_id" class="form-select select-2">
                                    <option value="">-- Select Role --</option>
                                    <option value="1" @if ($arr['row']->role_id == 1) selected @endif>MANAGER</option>
                                    <option value="2" @if ($arr['row']->role_id == 2) selected @endif>KARYAWAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" data-name="username" placeholder="Username" value="{{$arr['row']->username}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" data-name="password" placeholder="Password" value="{{$arr['row']->pass}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" class="form-control" data-name="foto" id="foto" placeholder="Foto">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <div class="card-foto">
                                    <img id="show_img" src="{{asset('assets/profile/'.$arr['row']->foto)}}" alt="">
                                    
                                </div>
                                <input type="hidden" id="foto_name" value="{{$arr['row']->foto}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class='bx bxs-save'></i>
                        </span>
                        <span class="text" data-name="save_data">edit Data</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

{{-- Action Add --}}
<script>
    $(document).on("click", "[data-name='save_data']", function (e) {
        $('.preloader').show();
        var id          = $("[data-name='id_user']").val();
        var name        = $("[data-name='name']").val();
        var email       = $("[data-name='email']").val();
        var role_id     = $("[data-name='role_id']").val();
        var username    = $("[data-name='username']").val();
        var password    = $("[data-name='password']").val();
        var foto        = $("#foto_name").val();
        var table       = 'users';
        var whr         = 'id';
        var dats        = {name:name,email:email,role_id:role_id,username:username,password:password,foto:foto};
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


    $("#foto").on("change", function(e){
        var ext = $("#foto").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#show_img').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_foto', photo);
            $.ajax({
                url: "{{route('upload_img')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#foto_name').val(res);
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