<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

/**
 * Class Marca
 *
 * @property $id
 * @property $nombre
 * @property $referencia
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    use SoftDeletes;

    static $rules = [
      'nombre' => 'required',
      'referencia' => 'required|required|unique:marcas,referencia,NULL,id,deleted_at,NULL',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','referencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_marca', 'id');
    }

    public function rulesUpdate($id){
      return [
        'nombre' => 'required',
        'referencia' => 'required|unique:marcas,referencia,'.$id.',id,deleted_at,NULL',
      ];
    }
    

}
