<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
   
    public function index(Request $request)
    {

        return view('backend.datauser');
    }

    public function loadTablePending()
    {
        $path_model   = "App\Models\\";
        $model        = "User";
        $condition    = "id_level = '1'";
        $row          = array('users.id' ,'users.name' ,'users.alamat' ,'users.no_hp' , 'users.email');
        $row_search   = array('users.id' ,'users.name' ,'users.alamat' ,'users.no_hp' , 'users.email');
        $join         = array('users' => 'users.id = users.user_id');
        $order        = "";
        $groupby      = "";
        $limit        = "";
        $offset       = "";
        $distinct     = "";
        
        return loadTableServerSide($path_model, $model, $condition, $row, $row_search, $join, $order, $groupby, $limit, $offset, $distinct);
    }

    public function loadTableApproval()
    {
        $path_model   = "App\Models\\";
        $model        = "User";
        $condition    = "id_level = '2'";
        $row          = array('users.id' ,'users.name' ,'users.alamat' ,'users.no_hp' , 'jumlah_perkerja','users.email' );
        $row_search   = array('users.id' ,'users.name' ,'users.alamat' ,'users.no_hp' , 'jumlah_perkerja','users.email' );
        $join         = array('users' => 'users.id = users.user_id');
        $order        = "";
        $groupby      = "";
        $limit        = "";
        $offset       = "";
        $distinct     = "";
        
        return loadTableServerSide($path_model, $model, $condition, $row, $row_search, $join, $order, $groupby, $limit, $offset, $distinct);
    }
  

    
}
