<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $ID_PRODUCTO
 * @property string $REFERENCIA_PRODUCTO
 * @property string $NOMBRE_PRODUCTO
 * @property string $CATEGORIA_PRODUCTO
 * @property string $COLOR_PRODUCTO
 * @property string $CANTIDAD_PRODUCTO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATED_AT
 * @property int $USUARIOS_ID
 * @property int $INVENTARIO_ID
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'ID_PRODUCTO';
	public $timestamps = false;

	protected $casts = [
		'CREATED_AT' => 'datetime',
		'UPDATED_AT' => 'datetime',
		'USUARIOS_ID' => 'int',
		'INVENTARIO_ID' => 'int'
	];

	protected $fillable = [
		'REFERENCIA_PRODUCTO',
		'NOMBRE_PRODUCTO',
		'CATEGORIA_PRODUCTO',
		'COLOR_PRODUCTO',
		'CANTIDAD_PRODUCTO',
		'CREATED_AT',
		'UPDATED_AT',
		'USUARIOS_ID',
		'INVENTARIO_ID'
	];
}
