<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{

    public function index()
    {
        return view('components/navbar');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Medication $medication)
    {
        //
    }

    public function edit(Medication $medication)
    {
        //
    }


    public function update(Request $request, Medication $medication)
    {
        //
    }


    public function destroy(Medication $medication)
    {
        //
    }
}
