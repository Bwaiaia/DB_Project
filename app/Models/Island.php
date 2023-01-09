<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Island extends Model
{
    use HasFactory;

    
    protected $table = 'islands';
    protected $fillable = ['island_name'];

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
