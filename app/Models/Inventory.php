<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use SoftDeletes;

    public $table = 'inventories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'inventory_code',
        'asset',
        'type',
        'categoly',
        'name',
        'series',
        'character',
        'identity_code',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function artworks()
    {
        return $this->belongsToMany(Artwork::class);
    }
}
