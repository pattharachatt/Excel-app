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
        'address',
        'tel_number',
        'about_the_artist',
        'master_work_1',
        'master_work_2',
        'master_work_3',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function artworks()
    {
        return $this->belongsToMany(Artwork::class);
    }
}
