<?php
namespace App\Models;
use Library\Database\Eloquent\Model;

class SubjectToOrder extends Model
{
    protected $guarded = ['id','poster_id'];
}