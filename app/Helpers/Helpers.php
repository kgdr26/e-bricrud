<?php

function idn_user($id){
    $arr    = collect(\DB::select("SELECT a.*, b.name AS name_role FROM users a LEFT JOIN  mst_role b ON a.role_id=b.id WHERE a.id='$id'"))->first();
    return $arr;
}

// Action Update Data
function actionupdate($table,$id,$data){
    DB::table($table)->where('id', $id)->update($data);
}
// End Action

//Action Cek Data
function cekdata($data){
    $table      = $data['table'];
    $whr        = $data['whr'];
    $id         = $data['id'];

    $arr['row'] = collect(\DB::select("SELECT * FROM $table WHERE $whr='$id'"))->first();

    return $arr;
}
//End Action Cek Data

    

?>
