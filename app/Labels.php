<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Labels extends Model {
  public $timestamps = false;

  protected $table = 'labels';
  protected $fillable = ['name'];
}
