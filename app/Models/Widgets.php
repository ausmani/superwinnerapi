<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at','updated_at'];

    /**
     * Accessor
     * Encrypt Id
     * @param  string  $value
     * @return string
     */

    public function getIdAttribute($value)
    {
        return encrypt($value);
    }

    /**
     * Decrypt Id.
     * Mutator
     * @param  string  $value
     * @return void
     */

    public function setIdAttribute($value)
    {
        $this->attributes['id'] = decrypt($value);
    }
}
