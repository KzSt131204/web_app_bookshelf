<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
     public function getPaginateByLimit(int $limit_count = 5)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

protected $fillable = [
    'title',
    'author',
    'publisher',
    
];

    public function shelves()
    {
        return $this->belongsToMany(Shelf::class);
    }
}
