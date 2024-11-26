<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function sectionItems()
    {
        return $this->hasMany(SectionItem::class);
    }
}
