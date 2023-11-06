<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKategoryModel extends Model
{
    use HasFactory;

    protected $table = 'master_kategory';
    public $timestamps = false;
    protected $guarded=['id'];
}
