<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subfaculty extends Model
{
    protected $table = 'subfaculties';
    protected $fillable = ['name', 'faculty'];

    public const FACULTIES = [
        'ekonomija' => 'Ekonomski fakultet',
        'pedagogija' => 'Pedagoški fakultet',
        'politika' => 'Fakultet za političke nauke',
        'ekologija' => 'Fakultet za ekologiju',
        'informatika' => 'Fakultet za informatiku',
        'umjetnost' => 'Fakultet lijepih umjetnosti',
        'bezbjednost' => 'Fakultet za bezbjednost i zaštitu'
    ];
}
