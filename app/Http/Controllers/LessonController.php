<?php

namespace App\Http\Controllers;

use App\LessonFilters;
use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{

    public function index(LessonFilters $filters)
    {

        return Lesson::filter($filters)->get();

    }

}
