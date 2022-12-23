<?php

namespace App\Models;

use App\Models\Sujet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sujets()
    {
        return $this->hasMany(Sujet::class);
    }
}
