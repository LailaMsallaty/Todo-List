<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  /*  protected $table = 'my_todos';
    public $timestamps = false;*/
    protected $attributes = [
      'completed' => false,
  ];
}
