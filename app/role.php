<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
  public function permission(){
      return $this->belongsToMany(\App\permission::class);
  }
}
