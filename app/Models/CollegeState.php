<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeState extends Model
{
    protected $table = 'college_states';
    protected $fillable = [

        'name',
        'slug',
        'image',
        'description',
        'overview',
        'status'
    ];
    public function colleges()
    {
        return $this->hasMany(\App\Models\College::class, 'state_id');
    }
}
