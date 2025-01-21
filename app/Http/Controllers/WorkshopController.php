<?php
namespace App\Http\Controllers;

use App\Models\WorkshopRegistration;
use Illuminate\Http\Request;

class WorkshopRegistrationController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'leerlingcode' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'workshop1' => 'required|string|max:255',
            'workshop2' => 'required|string|max:255',
            'workshop3' => 'required|string|max:255',
        ]);

        WorkshopRegistration::create([
            'leerlingcode' => $request->leerlingcode,
            'name' => $request->name,
            'email' => $request->email,
            'workshop1' => $request->workshop1,
            'workshop2' => $request->workshop2,
            'workshop3' => $request->workshop3,
        ]);

        return redirect()->back()->with('success', 'Registratie succesvol!');
    }
}