<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellModel extends Model
{

    protected $table = 'sells';
    protected $guarded = ['id'];
    use HasFactory;
}
