<?php

namespace App\Http\Controllers\Notes;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
        return Subject::get();
    }
}
