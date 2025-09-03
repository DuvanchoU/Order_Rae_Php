<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoHasProducto
 * 
 * @property int $ID_PEDIDO_PRODUCTO
 * @property int $PEDIDO_ID
 * @property int $PRODUCTO_ID
 *
 * @package App\Models
 */
class PedidoHasProducto extends Model
{
	protected $table = 'pedido_has_producto';
	protected $primaryKey = 'ID_PEDIDO_PRODUCTO';
	public $timestamps = false;

	protected $casts = [
		'PEDIDO_ID' => 'int',
		'PRODUCTO_ID' => 'int'
	];

	protected $fillable = [
		'PEDIDO_ID',
		'PRODUCTO_ID'
	];
}
