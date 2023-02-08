<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'medium',
        'size_width',
        'size_length',
        'size_total',
        'created_date',
        'edition',
        'quantity',
        'status',
        'estimate_finished_date',
        'acqustion_date',
        'location',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function artworks()
    {
        return $this->belongsToMany(Artwork::class);
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class);
    }
}
