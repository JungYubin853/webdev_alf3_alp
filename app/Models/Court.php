<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    public function Court(): HasMany {
        return $this->hasMany(BookedCourt::class);
    }
}
