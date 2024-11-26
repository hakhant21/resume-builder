<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{
    protected $guarded = [];

    protected $casts = [
        'files' => 'array',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
