<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tableactivo
 *
 * @property $id
 * @property $codigo
 * @property $marca
 * @property $descripcion
 * @property $numero_serie
 * @property $placa
 * @property $fecha_alta
 * @property $precio_adquisicion
 * @property $moneda
 * @property $precio_actual
 * @property $ubicacion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tableactivo extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'marca' => 'required',
		'descripcion' => 'required',
		'placa' => 'required',
		'fecha_alta' => 'required',
		'precio_adquisicion' => 'required',
		'moneda' => 'required',
		'precio_actual' => 'required',
		'ubicacion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','marca','descripcion','numero_serie','placa','fecha_alta','precio_adquisicion','moneda','precio_actual','ubicacion','estado'];



}
