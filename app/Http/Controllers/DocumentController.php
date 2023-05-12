<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Crew;
use Yajra\DataTables\DataTables;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Document::with('crew')
                ->select('documents.*')
                ->orderBy('created_at', 'desc');
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('crew_name', function ($row) {
                    return $row->crew->first_name . ' ' . $row->crew->last_name;
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('documents.edit', $row->id);
                    $deleteUrl = route('documents.destroy', $row->id);
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
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('documents.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crewMembers = Crew::all();
        return view('documents.create', compact('crewMembers'));
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
             'name' => 'required',
             'document_number' => 'required|unique:documents,document_number',
             'date_issued' => 'required',
             'date_expiry' => 'required',
             'remarks' => 'nullable',
             'crew_id' => 'required|exists:crews,id'
        ]);
    
        $crew = Crew::find($validatedData['crew_id']);
    
        $document = new Document($validatedData);
        $document->crew()->associate($crew);
        $document->save();
    
        return redirect()->route('documents.index')->with('success', 'Document created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        $crewMembers = Crew::all();
        return view('documents.edit', compact('document', 'crewMembers'));
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Document $document)
{
    $validatedData = $request->validate([
        'code' => 'required',
        'name' => 'required',
        'document_number' => 'required|unique:documents,document_number,' . $document->id,
        'date_issued' => 'required',
        'date_expiry' => 'required',
        'remarks' => 'nullable',
        'crew_id' => 'required|exists:crews,id'
    ]);
    
    $document->update($validatedData);

    // update crew member
    $document->crew_id = $request->crew_id;
    $document->save();

    return redirect()->route('documents.index')->with('success', 'Document updated successfully.');
}
public function destroy(Document $document)
{
    $document->delete();

    return redirect()->route('documents.index')
        ->with('success', 'Document deleted successfully.');
}

}