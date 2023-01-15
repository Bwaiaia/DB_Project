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

    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public static $rules = [
        'name' => ['required','string','unique:islands'],
    ];
}
