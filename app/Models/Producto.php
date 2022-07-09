<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $talla
 * @property $observaciones
 * @property $id_marca
 * @property $cantidad_inventario
 * @property $fecha_embarque
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use SoftDeletes;

    static $rules = [
      'nombre' => 'required|required|unique:productos,nombre,NULL,id,deleted_at,NULL',
      'talla' => 'required',
      'observaciones' => 'required',
      'id_marca' => 'required',
      'cantidad_inventario' => 'required',
      'fecha_embarque' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','talla','observaciones','id_marca','cantidad_inventario','fecha_embarque'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'id_marca');
    }

    public function rulesUpdate($id){
      return [
        'nombre' => 'required|unique:marcas,referencia,'.$id.',id,deleted_at,NULL',
        'talla' => 'required',
        'observaciones' => 'required',
        'id_marca' => 'required',
        'cantidad_inventario' => 'required',
        'fecha_embarque' => 'required',
      ];
    }
    

}
