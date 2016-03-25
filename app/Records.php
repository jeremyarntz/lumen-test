<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model {
  protected $table = 'records';
  protected $fillable = [
      'id',
      'title',
      'artist',
      'type'
  ];

  public function type()
  {
      return $this->hasOne('Types');
  }

  public function artist()
  {
      return $this->hasOne('Artists');
  }
}
