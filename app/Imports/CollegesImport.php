<?php

namespace App\Imports;

use App\Models\College;
use App\Models\CollegeState;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;

class CollegesImport implements ToModel
{
    public function model(array $row)
    {
        // Skip header
        if ($row[0] == 'name') {
            return null;
        }

        // Find state
        $state = CollegeState::where('name', $row[1])->first();

        if (!$state) {
            return null;
        }

        return new College([
            'name' => $row[0],
            'slug' => Str::slug($row[0]),
            'state_id' => $state->id,
            'email' => $row[2] ?? null,
            'type' => $row[3] ?? null,
            'naac_grade' => $row[4] ?? null,
            'status' => strtolower($row[5]) == 'active' ? 'active' : 'inactive',
        ]);
    }
}