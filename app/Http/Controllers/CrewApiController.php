<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Crew;
class CrewApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crews = Crew::all();
        return response()->json(['data' => $crews]);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|email|unique:crews',
            'address' => 'required',
            'education' => 'required',
            'contact_details' => 'required',
        ]);

        $crew = Crew::create($validatedData);

        return response()->json(['data' => $crew, 'message' => 'Crew created successfully.'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function show(Crew $crew)
    {
        return response()->json(['data' => $crew]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
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

        return response()->json(['data' => $crew, 'message' => 'Crew updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crew $crew)
    {
        $crewName = $crew->first_name . ' ' . $crew->last_name;
        $crew->delete();
    
        return response()->json(['message' => 'Crew ' . $crewName . ' deleted successfully.']);
    }
}
