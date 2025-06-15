<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountController extends Controller
{
    public function index()
    {
        $counter = DB::table('pagecounter')->where('id', 1)->first();
        $newCount = $counter->Jumlah + 1;
        DB::table('pagecounter')->where('id', 1)->update(['Jumlah' => $newCount]);
        return view('indexcounter', ['jumlah' => $newCount]);
    }
}
