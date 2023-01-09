<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Training extends Model
{
    use HasFactory;

    protected $table = 'trainings';
<<<<<<< HEAD
    protected $fillable = ['island_id', 'training_type_id','training_date'];


    public function type(){

        return $this->belongsTo(TrainingType::class);
    }

    public function trainingdetails(){

        return $this->hasMany(TrainingDetail::class);
    }

}
=======
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
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
