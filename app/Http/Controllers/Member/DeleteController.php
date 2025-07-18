<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;

class DeleteController extends BackendController
{
    public function destry(int $id)
    {   
        $row = User::findOrFail($id);
        $row->delete();
        return redirect()->route('member.index')->with('success', 'Member deleteed successfully');
    }


}