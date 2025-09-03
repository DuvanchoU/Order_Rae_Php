<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fidelizacion
 * 
 * @property int $ID_FIDELIZACION
 * @property Carbon $FECHA_DE_FIDELIZACION
 * @property int $TOTAL_DEL_PRODUCTO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATED_AT
 * @property int $USUARIOS_ID
 *
 * @package App\Models
 */
class Fidelizacion extends Model
{
	protected $table = 'fidelizacion';
	protected $primaryKey = 'ID_FIDELIZACION';
	public $timestamps = false;

	protected $casts = [
		'FECHA_DE_FIDELIZACION' => 'datetime',
		'TOTAL_DEL_PRODUCTO' => 'int',
		'CREATED_AT' => 'datetime',
		'UPDATED_AT' => 'datetime',
		'USUARIOS_ID' => 'int'
	];

	protected $fillable = [
		'FECHA_DE_FIDELIZACION',
		'TOTAL_DEL_PRODUCTO',
		'CREATED_AT',
		'UPDATED_AT',
		'USUARIOS_ID'
	];
}
