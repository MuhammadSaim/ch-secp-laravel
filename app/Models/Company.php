<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;


    /**
     * company relationship to the cro
     *
     * @return BelongsTo
     */
    public function cro(): BelongsTo
    {
        return $this->belongsTo(Cro::class);
    }


}
