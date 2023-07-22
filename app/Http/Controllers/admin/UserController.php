<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use Redirect,Response,DB,Config;
use Datatables;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(UsersDataTable $dataTable)
    {
      
        return $dataTable->render('admin.User.user');
    }
    public function delete($id)
    {
        
        $users = DB::table('users')->where('id',$id)->delete();
        return ['data' =>'success'];
        
    }
    
}
