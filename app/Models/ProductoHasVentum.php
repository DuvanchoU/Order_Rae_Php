<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductoHasVentum
 * 
 * @property int $ID_PRODUCTO_HAS_VENTA
 * @property int $VENTA_ID
 * @property int $PRODUCTO_ID
 *
 * @package App\Models
 */
class ProductoHasVentum extends Model
{
	protected $table = 'producto_has_venta';
	protected $primaryKey = 'ID_PRODUCTO_HAS_VENTA';
	public $timestamps = false;

	protected $casts = [
		'VENTA_ID' => 'int',
		'PRODUCTO_ID' => 'int'
	];

	protected $fillable = [
		'VENTA_ID',
		'PRODUCTO_ID'
	];
}
