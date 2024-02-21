<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax){
            return datatables()->of(User::from(DB::raw("(select *, concat(first_name,' ',last_name) full_name from users) users")))->addIndexColumn()->make(true);
        }

        return view('profile.index');
    }

    public function show($id)
    {
        return view('profile.show', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function create(UserRequest $request)
    {
        if($request->isMethod('POST')){
            (new User())->fill($request->validated())->save();
    
            return Redirect::route('profile.index')->with('success', 'Profile has been created');
        }

        return view('profile.input');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->isMethod('POST')){
            $validated = $request->validated();
            if($validated['password']){
                $validated['password'] = bicrypt($validated['password']);
            }else{
                unset($validated['password']);
            }
            $user->fill($validated);
    
            $user->save();
    
            return Redirect::route('profile.index')->with('success', 'Profile has been updated');
        }

        return view('profile.input', [
            'item' => $user,
        ]);
    }

    /**
     * Delete the user's account.
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return Redirect::route('profile.index')->with('success', 'Profile has been deleted');
    }
}
