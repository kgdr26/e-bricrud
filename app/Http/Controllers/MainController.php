<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\File;
use ZanySoft\Zip\Zip;
use ZipArchive;
use Carbon\Carbon;
use Response;
use Hash;
use Auth;
use Session;
use Redirect;

class MainController extends Controller
{

    //Home
    function dasbor() : object {
        $idn_user   = idn_user(auth::user()->id);
        $data       = array(
            'title'     => 'Dashboard',
            'idn_user'  => $idn_user
        );

        return view('Dasbor.list')->with($data);
    }
    //End Home


    //Karyawan
    function inp_karyawan() : object {
        $idn_user   = idn_user(auth::user()->id);
        $data       = array(
            'title'     => 'Input Karyawan',
            'idn_user'  => $idn_user
        );

        return view('Karyawan.input')->with($data);
    }

    function add_karyawan(Request $request)
    {

        $username   = $request['username'];
        $password   = Hash::make($request['password']);
        $pass       = $request['password'];
        $role_id    = $request['role_id'];
        $name       = $request['name'];
        $email      = $request['email'];
        $foto       = $request['foto'];
        
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO users (username, password, pass, role_id, name, email, foto, is_active, update_by) values (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$username, $password, $pass, $role_id, $name, $email, $foto, $is_active, $update_by]);

        return response('success');
    }

    function list_karyawan() : object {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = DB::select("SELECT a.*, b.name AS role_name FROM users a LEFT JOIN mst_role b ON a.role_id=b.id WHERE a.is_active=1");
        $data       = array(
            'title'     => 'Liat Karyawan',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Karyawan.list')->with($data);
    }

    function editprofile(Request $request) : object {
        $idn_user   = idn_user(auth::user()->id);
        $id         = $request->id;
        $whr        = 'id';
        $table      = 'users';
        $list       = array(
            'id'    => $id,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($list);
        $data       = array(
            'title'     => 'Edit Data',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Karyawan.edit')->with($data);
    }

    //End Karyawan

    //Nasabah
    function inp_nasabah() : object {
        $idn_user   = idn_user(auth::user()->id);
        $anggunan   = DB::select("SELECT * FROM mst_anggunan WHERE is_active=1");
        $data       = array(
            'title'     => 'Input Nasabah',
            'idn_user'  => $idn_user,
            'anggunan'  => $anggunan
        );

        return view('Nasabah.input')->with($data);
    }

    function add_nasabah(Request $request)
    {

        $name               = $request['name'];
        $no_tlp             = $request['no_tlp'];
        $no_ktp             = $request['no_ktp'];
        $upload_ktp         = $request['upload_ktp'];
        $no_kk              = $request['no_kk'];
        $upload_kk          = $request['upload_kk'];
        $alamat             = $request['alamat'];
        $no_npwp            = $request['no_npwp'];
        $upload_npwp        = $request['upload_npwp'];
        $upload_bukunikah   = $request['upload_bukunikah'];
        $upload_slipgaji    = $request['upload_slipgaji'];
        $upload_rek         = $request['upload_rek'];
        $id_anggunan        = $request['id_anggunan'];
        $harga              = (int) str_replace(array('Rp', '.', ','), '', $request['harga']);
        $id_status          = 1;
        $is_active  = 1;
        $id_input   = auth::user()->id;
        $date_input = date('Y-m-d H:m:i');

        DB::insert("INSERT INTO trx_nasabah (
            name,
            no_tlp,
            no_ktp,
            upload_ktp,
            no_kk,
            upload_kk,
            alamat,
            no_npwp,
            upload_npwp,
            upload_bukunikah,
            upload_slipgaji,
            upload_rek,
            id_anggunan,
            harga,
            is_active,
            id_input,
            date_input,
            id_status
        ) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [
            $name,
            $no_tlp,
            $no_ktp,
            $upload_ktp,
            $no_kk,
            $upload_kk,
            $alamat,
            $no_npwp,
            $upload_npwp,
            $upload_bukunikah,
            $upload_slipgaji,
            $upload_rek,
            $id_anggunan,
            $harga,
            $is_active,
            $id_input,
            $date_input,
            $id_status
        ]);

        return response('success');
    }

    function list_nasabah() : object {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = DB::select("SELECT a.*, b.name AS name_anggunan, c.name AS name_input, d.name AS name_approv, e.name_status FROM trx_nasabah a LEFT JOIN mst_anggunan b ON a.id_anggunan=b.id LEFT JOIN users c ON a.id_input=c.id LEFT JOIN users d ON a.id_approval=d.id LEFT JOIN mst_status e ON a.id_status=e.id WHERE a.is_active=1");
        $data       = array(
            'title'     => 'List Nasabah',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Nasabah.list')->with($data);
    }

    function approve_nasabah() : object {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = DB::select("SELECT a.*, b.name AS name_anggunan, c.name AS name_input, d.name AS name_approv, e.name_status FROM trx_nasabah a LEFT JOIN mst_anggunan b ON a.id_anggunan=b.id LEFT JOIN users c ON a.id_input=c.id LEFT JOIN users d ON a.id_approval=d.id LEFT JOIN mst_status e ON a.id_status=e.id WHERE a.id_status=1");
        $data       = array(
            'title'     => 'List Nasabah Approved',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Nasabah.approval')->with($data);
    }

    function detailnasabah(Request $request) : object {
        $idn_user   = idn_user(auth::user()->id);
        $id_nasabah = $request->id;
        $whr        = 'id';
        $table      = 'trx_nasabah';
        $list       = array(
            'id'    => $id_nasabah,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($list);
        $data       = array(
            'title'     => 'Detail Nasabah',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Nasabah.detail')->with($data);
    }

    function actionapprove(Request $request) : object {
        $idn_user   = idn_user(auth::user()->id);
        $id_nasabah = $request->id;
        $whr        = 'id';
        $table      = 'trx_nasabah';
        $list       = array(
            'id'    => $id_nasabah,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($list);
        $data       = array(
            'title'     => 'Detail Nasabah',
            'idn_user'  => $idn_user,
            'arr'       => $arr
        );

        return view('Nasabah.actionapprove')->with($data);
    }
    //End Nasabah

    function upload_img(Request $request){

        if ($request->hasFile('add_foto')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_foto');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/assets/profile/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_foto')->move($path, $fileName);

            return response($fileName);
        }

    }

    function upload_doc(Request $request){

        if ($request->hasFile('add_foto')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_foto');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/assets/doc/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_foto')->move($path, $fileName);

            return response($fileName);
        }

    }

    function edit(Request $request){
        $table      = $request['table'];
        $id         = $request['id'];
        $whr        = $request['whr'];
        $data       = $request['dats'];
        DB::table($table)->where($whr, $id)->update($data);
        return response('success');
    }

    function limitasi() : object {

    }


}
