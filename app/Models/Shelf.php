<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class shelf extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    

    
    public function user()
{
    return $this->belongsTo(User::class);
}
protected $dates = ['deleted_at'];

protected $fillable = ['name',];
    
   public function getPaginateByLimit(int $limit_count = 5)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
