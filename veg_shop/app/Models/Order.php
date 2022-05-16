<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belogsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
