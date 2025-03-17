<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index()
    {
        return response()->json(Candidature::all(), 200);
    }

    public function store(Request $request)
    {
        $candidature = Candidature::create($request->all());
        return response()->json($candidature, 201);
    }

    public function show($id)
    {
        $candidature = Candidature::find($id);
        return $candidature ? response()->json($candidature, 200) : response()->json(['message' => 'Candidature non trouvée'], 404);
    }

    public function update(Request $request, $id)
    {
        $candidature = Candidature::find($id);
        if (!$candidature) return response()->json(['message' => 'Candidature non trouvée'], 404);

        $candidature->update($request->all());
        return response()->json($candidature, 200);
    }

    public function destroy($id)
    {
        $candidature = Candidature::find($id);
        if (!$candidature) return response()->json(['message' => 'Candidature non trouvée'], 404);

        $candidature->delete();
        return response()->json(['message' => 'Candidature supprimée'], 200);
    }
}
