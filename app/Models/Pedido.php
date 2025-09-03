<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $ID_PEDIDO
 * @property Carbon $FECHA_DE_COMPRA
 * @property Carbon $FECHA_DE_ENTREGA
 * @property int $TOTAL_DE_PAGO
 * @property string $ESTADO_PEDIDO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATED_AT
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedido';
	protected $primaryKey = 'ID_PEDIDO';
	public $timestamps = false;

	protected $casts = [
		'FECHA_DE_COMPRA' => 'datetime',
		'FECHA_DE_ENTREGA' => 'datetime',
		'TOTAL_DE_PAGO' => 'int',
		'CREATED_AT' => 'datetime',
		'UPDATED_AT' => 'datetime'
	];

	protected $fillable = [
		'FECHA_DE_COMPRA',
		'FECHA_DE_ENTREGA',
		'TOTAL_DE_PAGO',
		'ESTADO_PEDIDO',
		'CREATED_AT',
		'UPDATED_AT'
	];
}
