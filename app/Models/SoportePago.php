<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SoportePago
 * 
 * @property int $ID_SOPORTE_PAGO
 * @property Carbon $HORA_PAGO
 * @property Carbon $FECHA_PAGO
 * @property int $TOTAL_PAGO
 * @property string $SOPORTE_PAGO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATE_AT
 * @property int $USUARIO_ID
 * @property int $VENTA_ID
 *
 * @package App\Models
 */
class SoportePago extends Model
{
	protected $table = 'soporte_pago';
	protected $primaryKey = 'ID_SOPORTE_PAGO';
	public $timestamps = false;

	protected $casts = [
		'HORA_PAGO' => 'datetime',
		'FECHA_PAGO' => 'datetime',
		'TOTAL_PAGO' => 'int',
		'CREATED_AT' => 'datetime',
		'UPDATE_AT' => 'datetime',
		'USUARIO_ID' => 'int',
		'VENTA_ID' => 'int'
	];

	protected $fillable = [
		'HORA_PAGO',
		'FECHA_PAGO',
		'TOTAL_PAGO',
		'SOPORTE_PAGO',
		'CREATED_AT',
		'UPDATE_AT',
		'USUARIO_ID',
		'VENTA_ID'
	];
}
