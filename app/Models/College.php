<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'state_id',
        'name',
        'slug',
        'image',
        'description',
        'address',
        'email',
        'type',
        'naac_grade',
        'status'
    ];

    // Relation with state
    public function state()
    {
        return $this->belongsTo(\App\Models\CollegeState::class, 'state_id');
    }
}
