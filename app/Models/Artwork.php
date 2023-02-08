<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use SoftDeletes;

    public $table = 'artwork';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'image',
        'artwork_title_th',
        'artwork_title_en',
        'description',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
