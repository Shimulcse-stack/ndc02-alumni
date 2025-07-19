<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Illuminate\Http\Request;

class MemberListController extends BackendController
{
    public function index()
    {
        $data = $this->data;
        $data['page_title'] = 'Member List'; 
        $data['rows'] = User::paginate(20);
        return view('default.member.list', compact('data'));
    }
}