<?php
namespace App\Models;
use Library\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded = ['id','user_id'];
}