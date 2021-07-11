<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'icon'];

    public static function getName(int $categoryId): string
    {
        return self::query()
            ->find($categoryId)
            ->get()
            ->first()->name;
    }
}
