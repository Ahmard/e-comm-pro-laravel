<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description', 'gallery', 'price'];

    public function getFormattedMoney(): string
    {
        return self::formatMoney($this['price']);
    }

    public static function formatMoney(int $money): string
    {
        return number_format($money, 0, ',');
    }
}

