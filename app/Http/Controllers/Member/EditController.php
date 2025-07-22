<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\BackendController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class EditController extends BackendController
{
    public function edit($id)
    {
        $data = $this->data;
        $data['page_title'] = 'Update Member';

        $data['row'] = User::findOrFail($id);
        $data['roles'] = Role::all();
        return view('default.member.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $row = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'roll' => 'nullable|string|max:50',
            'group' => 'nullable|string|max:50',
            'section' => 'nullable|string|max:50',
            'blood_group' => 'nullable|string|max:10',
            'blood_donor' => 'nullable|boolean',
            'tshirt_size' => 'nullable|string|max:10',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'postcode' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:100',
            'organization' => 'nullable|string|max:100',
            'photo_old' => 'nullable|image|mimes:jpeg,png,jpg',
            'photo_new' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('photo_old')) {
            if ($row->photo_old) {
                Storage::disk('public')->delete($row->photo_old);
            }
            $validated['photo_old'] = $request->file('photo_old')->store('photos', 'public');
        }
        if ($request->hasFile('photo_new')) {
            if ($row->photo_new) {
                Storage::disk('public')->delete($row->photo_new);
            }
            $validated['photo_new'] = $request->file('photo_new')->store('photos', 'public');
        }

        $row->update($validated);
        $row->syncRoles([$request->role]);
        return redirect()->route('member.index')->with('success', 'Member updated successfully');
    }
}
