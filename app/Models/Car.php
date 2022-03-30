<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function getCarnameAttribute(){
        return $this->car_brand. ' '. $this->car_model. ' '. $this->car_no;
    }
}
