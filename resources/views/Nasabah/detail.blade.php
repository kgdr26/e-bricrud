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
                    Detail Nasabah
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
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_ktp)}}" alt="" id="show_upload_ktp">
                                        <input type="text" class="name_image" name="" id="name_upload_ktp" value="{{$arr['row']->upload_ktp}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">KK</label>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_kk)}}" alt="" id="show_upload_kk">
                                        <input type="text" class="name_image" name="" id="name_upload_kk" value="{{$arr['row']->upload_kk}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">NPWP</label>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_npwp)}}" alt="" id="show_upload_npwp">
                                        <input type="text" class="name_image" name="" id="name_upload_npwp" value="{{$arr['row']->upload_npwp}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Buku Nikah</label>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_bukunikah)}}" alt="" id="show_upload_bukunikah">
                                        <input type="text" class="name_image" name="" id="name_upload_bukunikah" value="{{$arr['row']->upload_bukunikah}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Slip Gaji</label>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_slipgaji)}}" alt="" id="show_upload_slipgaji">
                                        <input type="text" class="name_image" name="" id="name_upload_slipgaji" value="{{$arr['row']->upload_slipgaji}}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="" class="form-label">Rekening Koran</label>
                                    <div class="card-doc-1">
                                        <img src="{{asset('assets/doc/'.$arr['row']->upload_rek)}}" alt="" id="show_upload_rek">
                                        <input type="text" class="name_image" name="" id="name_upload_rek" value="{{$arr['row']->upload_rek}}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class='bx bxs-save'></i>
                        </span>
                        <span class="text" data-name="save_data">Save Data</span>
                    </button>
                </div> --}}
            </div>
        </form>
    </div>

</div>

@stop