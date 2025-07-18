<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;

class ProfileController extends BackendController
{
    public function profile($id)
    {   
        $data['row'] = User::findOrFail($id);
        return view('default.member.profile', compact('data'));
    }
}


