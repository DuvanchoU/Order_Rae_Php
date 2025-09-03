<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoHasUsuario
 * 
 * @property int $ID_PEDIDO_CLIENTE
 * @property int $PEDIDO_ID
 * @property int $USUARIOS_ID
 *
 * @package App\Models
 */
class PedidoHasUsuario extends Model
{
	protected $table = 'pedido_has_usuarios';
	protected $primaryKey = 'ID_PEDIDO_CLIENTE';
	public $timestamps = false;

	protected $casts = [
		'PEDIDO_ID' => 'int',
		'USUARIOS_ID' => 'int'
	];

	protected $fillable = [
		'PEDIDO_ID',
		'USUARIOS_ID'
	];
}
