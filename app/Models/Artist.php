<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Artist extends Model
{
    use SoftDeletes;

    public $table = 'artists';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name_th',
        'name_en',
        'date_of_birth',
        'place_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function artworks()
    {
        return $this->belongsToMany(Artwork::class);
    }
}
