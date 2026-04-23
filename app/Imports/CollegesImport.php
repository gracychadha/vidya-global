<?php

namespace App\Imports;

use App\Models\College;
use App\Models\CollegeState;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CollegesImport implements ToModel, WithHeadingRow
{
  public function model(array $row)
{
    //  GET STATE NAME
    $stateName = trim($row['state'] ?? '');

    if (!$stateName) {
        return null;
    }

    //  FIND STATE (case insensitive)
    $state = CollegeState::whereRaw('LOWER(name) = ?', [strtolower($stateName)])->first();

    //  AUTO CREATE STATE
    if (!$state) {
        $state = CollegeState::create([
            'name'        => $stateName,
            'slug'        => \Str::slug($stateName),
            'image'       => null,
            'description' => 'Auto created from import',
            'status'      => 'active',
            'overview'    => 'Auto created from import'
        ]);
    }

    //  COLLEGE NAME
    $name = $row['name'] ?? null;

    if (!$name) {
        return null;
    }

    // UNIQUE SLUG LOGIC (FOR COLLEGE ONLY)
    $baseSlug = \Str::slug($name);
    $slug = $baseSlug;
    $count = 1;

    while (\App\Models\College::where('slug', $slug)->exists()) {
        $slug = $baseSlug . '-' . $count;
        $count++;
    }

    //  CREATE COLLEGE
    return new College([
        'state_id'    => $state->id,
        'name'        => $name,
        'slug'        => $slug,
        'email'       => $row['email'] ?? null,
        'type'        => $row['type'] ?? null,
        'naac_grade'  => $row['naac_grade'] ?? null,
        'address'     => $row['address'] ?? null,
        'description' => $row['description'] ?? null,
        'status'      => $row['status'] ?? 'active',
    ]);
}
}