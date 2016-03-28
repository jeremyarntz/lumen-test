<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Releases extends Model {
    public $timestamps = false;

    protected $table = 'releases';
    protected $fillable = ['name', 'artist', 'label'];
}
