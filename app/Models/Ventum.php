<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 * 
 * @property int $ID_VENTA
 * @property string $NOMBRE_PRODUCTO
 * @property string $CATEGORIA_PRODUCTO
 * @property string $COLOR_PRODUCTO
 * @property float $VALOR_UNITARIO
 * @property float $TOTAL_DETALLE
 * @property int $PEDIDO_ID
 * @property int $FIDELIZACION_ID
 *
 * @package App\Models
 */
class Ventum extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'ID_VENTA';
	public $timestamps = false;

	protected $casts = [
		'VALOR_UNITARIO' => 'float',
		'TOTAL_DETALLE' => 'float',
		'PEDIDO_ID' => 'int',
		'FIDELIZACION_ID' => 'int'
	];

	protected $fillable = [
		'NOMBRE_PRODUCTO',
		'CATEGORIA_PRODUCTO',
		'COLOR_PRODUCTO',
		'VALOR_UNITARIO',
		'TOTAL_DETALLE',
		'PEDIDO_ID',
		'FIDELIZACION_ID'
	];
}
