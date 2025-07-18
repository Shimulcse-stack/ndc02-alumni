<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BackendController
{
   
    public function index()
    {
        $data = $this->data;
        $data['page_title'] = 'Member List';
        $data['rows'] = User::paginate(5);
       
        return view('default.member.index', compact('data'));
    }
}
