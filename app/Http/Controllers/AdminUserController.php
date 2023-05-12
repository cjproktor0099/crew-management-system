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
        $loggedInUserId = auth()->id();
    
    if ($request->ajax()) {
        $data = User::where('id', '!=', $loggedInUserId)->select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('users.edit', $row->id);
                    $deleteUrl = route('users.destroy', $row->id);
                    $csrf = csrf_token();
                    $actionBtn = <<<EOF
                    <div class="text-center" style="width: 100%;">
                        <div class="btn-group">
                            <a href="$editUrl" class="edit btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="$deleteUrl" id="delete-form" method="POST">
                                <input type="hidden" name="_token" value="$csrf">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="delete btn btn-danger btn-sm bg-red-500 opacity-100" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
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
        $user = User::findOrFail($id);
    
        // Only admin can update users
        if (!auth()->user()->isAdmin()) {
            abort(403);
        }
    
        // Validate input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => ['required','string','max:10','unique:users,username' . ($id ? ",$id" : ''),'regex:/^[A-Za-z0-9]+$/'],
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:10',
            'isAdmin' => 'nullable|boolean',
        ]);
    
        // Update user
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
    
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
    
        if (auth()->user()->isAdmin() && isset($validatedData['isAdmin'])) {
            $user->isAdmin = $validatedData['isAdmin'];
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
