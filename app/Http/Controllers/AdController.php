<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Imports adicionais
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Advertise;
use App\Models\AdvertiseImage;
use App\Models\Category;

class AdController extends Controller
{
    public function list() {
      return view('list');
    }

    public function category(Request $r, String $slug) {
      $category = Category::where('slug', $slug)->first();

      if(!$category) {
        return redirect()->route('home');
      }

      $filteredAds = Advertise::where('category_id', $category->id)
      ->with('images')
      ->orderBy('created_at', 'desc')
      ->paginate(4);

      return view('category-list', compact('filteredAds', 'category'));
    }

    public function show(String $slug) {
      $ad = Advertise::where('slug', $slug)->first();

      if(!$ad) {
        return redirect()->route('home');
      }

      $ad->views++;
      $ad->save();

      $relatedAds = Advertise::where('category_id', $ad->category_id)
                    ->where('state_id', $ad->state_id)
                    ->where('id', '!=', $ad->id)
                    ->with('images')
                    ->limit(4)
                    ->get();

      return view('single-ad', compact('ad', 'relatedAds'));
    }

    public function delete(String $id) {
      // O anúncio só pode ser removido se pertence ao usuário.
      // O anúncio só pode ser removido se ele existir.
      // As imagens referentes ao anúncio devem ser removidas do banco.
      // TODO: As imagens referentes ao anúncio devem ser removidas do storage.

      $ad = Advertise::where('id', $id)
              ->where('user_id', Auth::user()->id)
                ->first(); // Se utilizar (GET) ao invés de (FIRST) SEMPRE terá retorno na verificação if, mesmo que vazio.

      if(!$ad) {
        return redirect()->route('home');
      } 
      
      AdvertiseImage::where('advertise_id', $ad->id)->delete(); // Primeiro remove todas as imagens do banco vinculadas ao anúncio.
      $ad->delete(); // Depois remove o anúncio.
      return redirect()->back();
    }
}
