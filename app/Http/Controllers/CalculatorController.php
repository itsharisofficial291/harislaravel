<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $totalMarks = $request->input('total_marks');
        $obtainedMarks = $request->input('obtained_marks');

        $percentage = ($obtainedMarks / $totalMarks) * 100;

        $grade = $this->calculateGrade($percentage);

        return view('calculator', compact('percentage', 'grade'));
    }

    private function calculateGrade($percentage)
    {
        if ($percentage >= 90) {
            return 'A+';
        } elseif ($percentage >= 80) {
            return 'A';
        } elseif ($percentage >= 70) {
            return 'A'; // Changed to 'A' for percentages in the 70s
        } elseif ($percentage >= 60) {
            return 'B';
        } elseif ($percentage >= 50) {
            return 'C';
        } elseif ($percentage >= 40) {
        return 'D';
        } 
        elseif ($percentage >= 33) {
            return 'E';
        }else {
            return 'Fail';
        }
    }    
}
