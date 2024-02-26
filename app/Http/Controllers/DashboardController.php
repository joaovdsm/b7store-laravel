<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Imports Adicionais
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\User;
use App\Models\State;

// Requests
use App\Http\Requests\UpdateProfileRequest;

class DashboardController extends Controller
{
    public function my_account() {
        $data['user'] = auth()->user();
        $data['states'] = State::all();
        return view('dashboard.my_account', $data);
    }

    public function my_account_action(UpdateProfileRequest $request) {
        $data = $request->only(['name', 'email', 'state_id']);

        // Como para esta função já existe um Request criado, é válido criar esta verificação dentro do próprio request
        // $stateRegister = State::find($data['state_id']);
        // if(!$stateRegister) {
        //     return redirect('/login');
        // }

        // Outra maneira de fazer o user update ("Para deixar o VSCode feliz")
        // $userId = Auth::user()->id;
        // $user = User::find($userId);
        // $user->update($data);

        $user = auth()->user();
        $user->update($data);
        
        return redirect()->route('my-account')->with('success', 'Dados atualizados com sucesso');
    }

    public function my_ads() {
        $user = auth()->user();

        // $data['advertises'] = $user->advertises;
        $advertises = $user->advertises;

        return view('dashboard.my_ads', compact('advertises'));
    }
}
