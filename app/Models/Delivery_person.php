<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_person extends Model
{
    use HasFactory;

    public $table = "delivery_persons";

    protected $fillable = [
        'delivery_person_name','delivery_person_phone_number','delivery_person_password','delivery_person_status','added_on'
    ];

    protected $primaryKey = 'delivery_person_id';
}
