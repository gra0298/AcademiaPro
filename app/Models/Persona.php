<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    //protected $fillable=['nombre','tituloUniversitario','edad','imagen'];
    protected $fillable=['name','document_type','identification_number','user_rol','email','phone_number','state'];
}
