<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $ID_INVENTARIO
 * @property string $REFERENCIA_PRODUCTO
 * @property string $CATEGORIA_PRODUCTO
 * @property string $COLOR_PRODUCTO
 * @property string $CANTIDAD_PRODUCTO
 * @property string $ESTADO_PRODUCTO
 * @property Carbon $CREATED_AD
 * @property Carbon $UPDATED_AD
 * @property int $USUARIOS_ID
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventario';
	protected $primaryKey = 'ID_INVENTARIO';
	public $timestamps = false;

	protected $casts = [
		'CREATED_AD' => 'datetime',
		'UPDATED_AD' => 'datetime',
		'USUARIOS_ID' => 'int'
	];

	protected $fillable = [
		'REFERENCIA_PRODUCTO',
		'CATEGORIA_PRODUCTO',
		'COLOR_PRODUCTO',
		'CANTIDAD_PRODUCTO',
		'ESTADO_PRODUCTO',
		'CREATED_AD',
		'UPDATED_AD',
		'USUARIOS_ID'
	];
}
