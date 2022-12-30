<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Island extends Model
{
    use HasFactory;

    protected $table = 'islands';
    protected $fillable = ['name', 'discription'];

}
