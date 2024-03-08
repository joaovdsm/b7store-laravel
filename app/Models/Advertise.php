<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Adicionais
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advertise extends Model
{
    use HasFactory;

    function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    function state(): BelongsTo {
        return $this->belongsTo(State::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(AdvertiseImage::class);
    }

    public function getPriceFormattedAttribute():String {
      return number_format($this->price, 2, ',', '.');
    }
}
