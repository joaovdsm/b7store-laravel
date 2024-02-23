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
        $data = $request->only(['name', 'email', 'state_id']);
        $stateRegister = State::find($data['state_id']);

        if(!$stateRegister) {
            return redirect('/login');
        }

        // Outra maneira de fazer o user update ("Para deixar o VSCode feliz")
        // $userId = Auth::user()->id;
        // $user = User::find($userId);
        // $user->update($data);

        $user = auth()->user();
        $user->update($data);
        
        return redirect()->route('my-account');
    }
}
