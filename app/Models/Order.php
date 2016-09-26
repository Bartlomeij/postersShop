<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id','user_id'];
    
    public function posters() {
        return $this->belongsToMany(Poster::class);
    }
}