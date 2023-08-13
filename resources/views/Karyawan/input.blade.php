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
                    Input Data Karyawan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" data-name="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" data-name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Role</label>
                                <select data-name="role_id" class="form-select select-2">
                                    <option value="">-- Select Role --</option>
                                    <option value="1">MANAGER</option>
                                    <option value="2">KARYAWAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" data-name="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" data-name="password" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" class="form-control" data-name="foto" id="foto" placeholder="Foto">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <div class="card-foto">
                                    <img id="show_img" src="{{asset('assets/profile/default.jpg')}}" alt="">
                                    
                                </div>
                                <input type="hidden" id="foto_name">
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
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         console.log(reader);
    //         reader.onload = function (e) {
    //             $('#show_img').attr('src', e.target.result);
    //             $('#fotobash').val(e.target.result);
                
    //         };
    //         reader.readAsDataURL(input.files[0]);
    //     }
        
    // }
</script>

{{-- Action Add --}}
<script>
    $(document).on("click", "[data-name='save_data']", function (e) {
        $('.preloader').show();
        var name        = $("[data-name='name']").val();
        var email       = $("[data-name='email']").val();
        var role_id     = $("[data-name='role_id']").val();
        var username    = $("[data-name='username']").val();
        var password    = $("[data-name='password']").val();
        var foto        = $("#foto_name").val();

        if(foto.trim() == '') {
            foto = 'default.jpg';
        }
        
        if(username.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Username is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(password.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Password is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(name.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Name is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(email.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Email is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(role_id.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Role is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(foto.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Role is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        $.ajax({
            type: "POST",
            url: "{{ route('add_karyawan') }}",
            data: {username:username,password:password,role_id:role_id,name:name,email:email,foto:foto},
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