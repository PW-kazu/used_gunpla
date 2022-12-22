<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];


    public function getDetail()
  {
    $txt = 'ID:'.$this->id . ' ' . $this->name . ' . $this->email.   '.$this->password;
    return $txt;
  }
}
