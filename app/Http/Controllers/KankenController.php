<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kanken;

class KankenController extends Controller
{
    public function create()
    {
        return view('/test-room/kansa-kensa/create');
    }
    public function index()
    {
        $kankens = Kanken::all();
        return view(('/test-room/kansa-kensa/index'), compact('kankens'));
    }
}
