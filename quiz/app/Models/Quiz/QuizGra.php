<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizGra extends Model
{
    use HasFactory;

    protected $table='quiz_gras';
    protected $primaryKey='id';

    protected $fillable=['slowoDoTlumaczenia'];
}
