<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model
{
    protected $guarded = [];

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
