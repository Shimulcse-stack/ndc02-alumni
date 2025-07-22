<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Spatie\Permission\Models\Role;


class DeleteController extends BackendController
{
    public function destroy(int $id)
    {   
        $row = User::findOrFail($id);
        $row->delete();
        return redirect()->route('member.index')->with('success', 'Member deleteed successfully');
    }


}