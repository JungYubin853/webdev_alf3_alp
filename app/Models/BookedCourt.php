<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class BookedCourt extends Model
{
    use HasFactory;
    public function court(): BelongsTo {
        return $this->belongsTo( Court::class);
    }

    public function booking(): BelongsTo {
        return $this->belongsTo( Booking::class);
    }
}
