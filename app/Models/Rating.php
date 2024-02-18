<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rating
 *
 * @property $id
 * @property $character_id
 * @property $divertido
 * @property $no_gusta
 * @property $created_at
 * @property $updated_at
 *
 * @property Character $character
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rating extends Model
{
    
    static $rules = [
		'character_id' => 'required',
		'divertido' => 'required',
		'no_gusta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['character_id','divertido','no_gusta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne('App\Models\Character', 'id', 'character_id');
    }

}
