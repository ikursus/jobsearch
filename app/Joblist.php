<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    // Beritahu maklumat nama table
    protected $table = 'joblist';

    // Tetapkan data yang boleh dimasukkan kedalam table
    protected $fillable = [
        'title', 'description', 'salary', 'position', 'education'
    ];
}
