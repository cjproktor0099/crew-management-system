<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('users.edit', $row->id);
                    $deleteUrl = route('users.destroy', $row->id);
                    $csrf = csrf_token();
                    $actionBtn = <<<EOF
                        <div class="btn-group">
                            <a href="$editUrl" class="edit btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="$deleteUrl" id="delete-form" method="POST">
                                <input type="hidden" name="_token" value="$csrf">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="delete btn btn-danger btn-sm bg-red-500 opacity-100" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    EOF;
                    
                    return $actionBtn;
                })
                ->addColumn('isAdmin', function ($row) {
                    return $row->isAdmin ? 'Yes' : 'No';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('admin.users.index');
    }
    
    public function create()
    {
        return view('admin.users.create');
    }
    
    public function store(Request $request)
    {
                // Check if user is admin
    
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:10|confirmed',
            'username' => 'required|string|max:10|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'isAdmin' => 'required|boolean',
        ]);
    
        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'isAdmin' => $request->input('isAdmin'),
        ]);
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
    
        return view('admin.users.edit', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,'.$id.'|max:255',
            'password' => 'nullable|string|min:8|max:255',
            'isAdmin' => 'required|boolean',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->isAdmin = $request->input('isAdmin');
    
        if ($request->has('password') && $request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    
}
