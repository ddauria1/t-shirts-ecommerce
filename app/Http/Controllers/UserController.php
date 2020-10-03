<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller implements IUserController {

    public function GetUserView($name, $surname, $dob, $recentPurchase, $address) 
    {
        try 
        {
            $user = new User($name, $surname, $dob, $recentPurchase, $address);
            return view('users.user', ['user'=>$user]);
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function GetAllUsers()
    {
        $users = User::all();
        return view('users.search', ['users'=>$users]);
    }

    public function GetAddUserForm()
    {
        return view('users.AddUser', []);
    }

    public function GetUserItem(Request $request)
    {
        if($request == null) {
            return view('404');
        } try {
            $user = $request->all();
            
        } catch(Exception $e) {
            dd($e);
            //return view('error.404',['error'->$e]);
        }
    }

    public function AddUserStore(Request $request)
    {
        $user = $request->all();
        $userDAO = new User();
        $userDAO->fill($user);
        $userDAO->save();

        //redirect
        return redirect()->route('user-search');
    }

    public function GetEditUserForm($id)
    {
        $user = User::find($id);
        
        //User::where('firstname','Danilo')->get(); // look for a specific row from where condition

        return view('users.EditUser',['user'=>$user]);
    }

    public function EditUser(Request $request)
    {
        $user = $request->all();
        $userDAO = User::find($user['id']);
        $userDAO->fill($user);
        $userDAO->save();

        return redirect()->route('all-productTypes');
    }
    
    public function GetDeleteUserForm(Request $request)
    {
        $user = $request->all();
        $userDAO = User::find($user['id']);
        return view('');
    }
    
    public function DeleteUser($id)
    {
        $userDAO = User::find($id);
        $userDAO->delete();

        return redirect()->route('user-search');
    }
}