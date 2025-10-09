<?php

namespace App\Http\Controllers;

use App\Models\NationalExam;
use Illuminate\Http\Request;

class NationalExamController extends Controller
{

    public function index()
    {
        $exams = NationalExam::latest()->get();
        return response()->json($exams);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'year' => 'required|integer',
            'pdf_path' => 'required|string',
        ]);

        $exam = NationalExam::create($request->all());

        return response()->json([
            'message' => 'Examen ajouté avec succès !',
            'exam' => $exam
        ], 201);
    }


    public function show($id)
    {
        $exam = NationalExam::findOrFail($id);
        return response()->json($exam);
    }


    public function update(Request $request, $id)
    {
        $exam = NationalExam::findOrFail($id);

        $exam->update($request->all());

        return response()->json([
            'message' => 'Examen modifié avec succès !',
            'exam' => $exam
        ]);
    }


    public function destroy($id)
    {
        $exam = NationalExam::findOrFail($id);
        $exam->delete();

        return response()->json([
            'message' => 'Examen supprimé avec succès !'
        ]);
    }
}
