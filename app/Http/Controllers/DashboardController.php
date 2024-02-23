<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;
use App\Models\State;

class DashboardController extends Controller
{
    public function my_account() {
        $data['user'] = auth()->user();
        $data['states'] = State::all();
        return view('dashboard.my_account', $data);
    }

    public function my_account_action(Request $request) {
        dd($request);
    }
}
