<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\assertGreaterThanOrEqual;

class Product extends Model
{
    use HasFactory;

    public function variation()
    {
      return $this->hasOne(Variation::class);
    }

    public function variationOption()
    {
        return $this->hasOne(VariationOption::class);
    }


}

