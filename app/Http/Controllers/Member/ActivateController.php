<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;

class ActivateController extends BackendController
{
    public function activate($id)
    {
        $row = User::findOrFail($id);
        $row->update(['status' => 'active']);
        return redirect()->route('member.index')->with('success', 'Member activated successfully');
    }
}