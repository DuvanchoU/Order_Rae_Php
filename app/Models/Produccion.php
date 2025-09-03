<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produccion
 * 
 * @property int $ID_PRODUCCION
 * @property string $REFERENCIA_PRODUCTO
 * @property string $CATEGORIA_PRODUCTO
 * @property string $MATERIAL_PRODUCTO
 * @property string $TIPO_DE_PRODUCTO
 * @property string $COLOR_PRODUCTO
 * @property string $CANTIDAD_PRODUCTO
 * @property string $ESTADO_PRODUCTO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATED_AT
 * @property int $USUARIOS_ID
 * @property int $PRODUCTO_ID
 *
 * @package App\Models
 */
class Produccion extends Model
{
	protected $table = 'produccion';
	protected $primaryKey = 'ID_PRODUCCION';
	public $timestamps = false;

	protected $casts = [
		'CREATED_AT' => 'datetime',
		'UPDATED_AT' => 'datetime',
		'USUARIOS_ID' => 'int',
		'PRODUCTO_ID' => 'int'
	];

	protected $fillable = [
		'REFERENCIA_PRODUCTO',
		'CATEGORIA_PRODUCTO',
		'MATERIAL_PRODUCTO',
		'TIPO_DE_PRODUCTO',
		'COLOR_PRODUCTO',
		'CANTIDAD_PRODUCTO',
		'ESTADO_PRODUCTO',
		'CREATED_AT',
		'UPDATED_AT',
		'USUARIOS_ID',
		'PRODUCTO_ID'
	];
}
