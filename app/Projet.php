<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Projet extends Model implements HasMedia
{
    protected $table = 'projets';
    use HasMediaTrait;
    use SoftDeletes;
}
