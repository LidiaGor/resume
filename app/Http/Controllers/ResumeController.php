<?php
namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ResumeController extends Controller

{ public function index()
{
    $resume = Resume::all();
    return Inertia::render('Resume',compact(var_name: 'resume'));
}
}
//


