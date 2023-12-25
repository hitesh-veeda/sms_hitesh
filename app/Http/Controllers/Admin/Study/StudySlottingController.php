<?php

namespace App\Http\Controllers\Admin\Study;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudySlottingController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
        $this->middleware('checkpermission');
    }

    public function studyCalendarList() {
        return view('admin.study.study_slotting.clinical_calendar');
    }
}
