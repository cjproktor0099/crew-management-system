<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crew;
use Yajra\DataTables\DataTables;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Crew::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('crews.edit', $row->id);
                    $deleteUrl = route('crews.destroy', $row->id);
                    $viewDocs = json_encode($row->documents);
                    $csrf = csrf_token();
                    $actionBtn = <<<EOF
                        <div class="btn-group">
                            <a href="$editUrl" class="edit btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="view-docs btn btn-info btn-sm" data-toggle="modal" data-target="#view-documents" data-documents='$viewDocs'><i class="fas fa-file-alt"></i></a>
                            <form action="$deleteUrl" id="delete-form" method="POST">
                                <input type="hidden" name="_token" value="$csrf">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="delete btn btn-danger btn-sm bg-red-500 opacity-100" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                        EOF;
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('dashboard');
    }

    public function create()
    {
        return view('crews.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|email|unique:crews',
            'address' => 'required',
            'education' => 'required',
            'contact_details' => 'required',
        ]);

        Crew::create($validatedData);

        return redirect()->route('crews.index')->with('success', 'Crew created successfully.');
    }

    public function edit(Crew $crew)
    {
        return view('crews.edit', compact('crew'));
    }

    public function update(Request $request, Crew $crew)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:crews,email,'.$crew->id,
            'address' => 'required',
            'education' => 'required',
            'contact_details' => 'required',
        ]);

        $crew->update($validatedData);

        return redirect()->route('crews.index')->with('success', 'Crew updated successfully.');
    }

    public function destroy(Crew $crew)
    {
        $crewName = $crew->first_name . ' ' . $crew->last_name;
        $crew->delete();
    
        return redirect()->route('crews.index')->with('success', 'Crew ' . $crewName . ' deleted successfully.');
    }
    public function showDocuments(Crew $crew)
{
    $documents = $crew->documents;
    return view('crews.documents', compact('documents'));
}


//Api 

}
