<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model {
  public $timestamps = false;

  protected $table = 'artists';
  protected $fillable = ['name'];
}
