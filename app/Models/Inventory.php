<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}

// public function suppliers()
// {
//     return $this->belongsToMany(Supplier::class, 'inventory_supplier');
// }

public function suppliers()
{
    return $this->belongsToMany(Supplier::class, 'inventories', 'id','supplier_id');

}

}
