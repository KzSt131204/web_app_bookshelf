<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelf extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}

protected $fillable = [
    'name',
    
];
    
   public function getPaginateByLimit(int $limit_count = 5)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
