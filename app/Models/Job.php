<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            ['title' => 'software engineer', 'salary' => '1000$'],
            ['title' => 'graphic designer', 'salary' => '2000$'],

        ];
    }
}
