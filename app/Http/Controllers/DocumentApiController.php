<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DocumentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $documents = Document::all();
        return response()->json($documents, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'file_path' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $document = Document::create([
            'name' => $request->name,
            'description' => $request->description,
            'file_path' => $request->file_path,
        ]);

        return response()->json($document, 201);
    }

    public function show($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found.'], 404);
        }

        return response()->json($document, 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'file_path' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $document = Document::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found.'], 404);
        }

        $document->update([
            'name' => $request->name,
            'description' => $request->description,
            'file_path' => $request->file_path,
        ]);

        return response()->json($document, 200);
    }

    public function destroy($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found.'], 404);
        }

        $document->delete();

        return response()->json(['message' => 'Document deleted successfully.'], 200);
    }
}
