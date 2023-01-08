<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Training extends Model
{
    use HasFactory;

    protected $table = 'trainings';
    protected $fillable = ['training_date','island_id','training_type_id'];

    public function training_types()
    {

        return $this->hasOne(TrainingType::class);
    }

    public function islands()
    {
        return $this->belongsTo(Island::class);
    }

    public function training_details()
    {
        return $this->hasMany(TrainingDetails::class);
    }


}