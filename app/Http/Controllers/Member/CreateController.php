<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;


class CreateController extends BackendController
{
   

    public function create()
    {
    $roles = Role::all(); 
    $data = [
        'roles' => $roles,
        'row' => null,
    ];
        return view('default.member.form', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable',
            'roll' => 'nullable',
            'group' => 'nullable',
            'section' => 'nullable',
            'blood_group' => 'nullable|max:10',
            'blood_donor' => 'nullable|boolean',
            'tshirt_size' => 'nullable|max:10',
            'address' => 'nullable',
            'city' => 'nullable|max:100',
            'postcode' => 'nullable|max:20',
            'designation' => 'nullable|max:100',
            'organization' => 'nullable|string|max:100',
            'photo_old' => 'nullable|image|mimes:jpeg,png,jpg',
            'photo_new' => 'nullable|image|mimes:jpeg,png,jpg',

        ]);

        $user = new User($validated);
        if ($request->hasFile('photo_old')) {
            $user->photo_old = $request->file('photo_old')->store('photos', 'public');
        }
        if ($request->hasFile('photo_new')) {
            $user->photo_new = $request->file('photo_new')->store('photos', 'public');
        }
        $user->password = bcrypt('default_password'); 
        $user->save();
       
        $row->update($validated);
        $row->syncRoles([$request->role]);
        return redirect()->route('member.index')->with('success', 'Member created successfully');
    }
}