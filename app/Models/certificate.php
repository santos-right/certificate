<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'last_name',
        'email',
        'course',
        'date',
        'image',
        'certificate_no',
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('first_name', 'like', '%' . request('search'). '%')
            ->orWhere('last_name', 'like', '%' . request('search'). '%')
            ->orWhere('course', 'like', '%' . request('search'). '%');
        }
    }
}
