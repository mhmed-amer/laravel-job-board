<?php

namespace App\Models;

use function Laravel\Prompts\title;

// use Illuminate\Database\Eloquent\Model;

class Job 
{
    public static function all(): array{
        return[
            ['title'=>'software engineer', 'salary'=>'1000$'],
            ['title'=>'graphic designer', 'salary'=>'2000$']

        ];
    }
}
