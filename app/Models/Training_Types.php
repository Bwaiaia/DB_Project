<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Training_Types extends Model
{
    use HasFactory;

    protected $table = 'training_types';

    protected $fillable = ['id', 'training_name', 'training_description'];
}