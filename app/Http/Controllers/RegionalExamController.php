<?php

namespace App\Http\Controllers;

use App\Models\RegionalExam;
use Illuminate\Http\Request;

class RegionalExamController extends Controller
{

    public function index()
    {
        $exams = RegionalExam::latest()->get();
        return response()->json($exams);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'year' => 'required|integer',
            'pdf_path' => 'required|string',
        ]);

        $exam = RegionalExam::create($request->all());

        return response()->json([
            'message' => 'Examen régional ajouté avec succès !',
            'exam' => $exam
        ], 201);
    }


    public function show($id)
    {
        $exam = RegionalExam::findOrFail($id);
        return response()->json($exam);
    }


    public function update(Request $request, $id)
    {
        $exam = RegionalExam::findOrFail($id);
        $exam->update($request->all());

        return response()->json([
            'message' => 'Examen régional modifié avec succès !',
            'exam' => $exam
        ]);
    }


    public function destroy($id)
    {
        $exam = RegionalExam::findOrFail($id);
        $exam->delete();

        return response()->json([
            'message' => 'Examen régional supprimé avec succès !'
        ]);
    }
}
