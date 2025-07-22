<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Spatie\Permission\Models\Role;


class SuspendController extends BackendController
{
    public function suspend($id)
    {
        $row = User::findOrFail($id);
        $row->update(['status' => 'suspended']);
        return redirect()->route('member.index')->with('success', 'Member suspended successfully');
    }
}