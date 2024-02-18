<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Character
 *
 * @property $id
 * @property $nombre
 * @property $apodos
 * @property $franquicia
 * @property $descripcion
 * @property $imagen
 * @property $logo
 * @property $color
 * @property $primera_aparicion
 * @property $rating_oficial
 * @property $created_at
 * @property $updated_at
 *
 * @property Rating[] $ratings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Character extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'franquicia' => 'required',
		'descripcion' => 'required',
		'primera_aparicion' => 'required',
		'rating_oficial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apodos','franquicia','descripcion','imagen','logo','color','primera_aparicion','rating_oficial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating', 'character_id', 'id');
    }
    

}
