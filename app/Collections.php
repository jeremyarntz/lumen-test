<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model {
  public $timestamps = false;

  protected $table = 'collections';
  protected $fillable = ['user', 'release'];
}
