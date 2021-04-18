<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Print_;

class VariationOption extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
