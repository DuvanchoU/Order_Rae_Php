<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentaHasUsuario
 * 
 * @property int $ID_VENTA_ASESOR
 * @property int $VENTA_ID
 * @property int $USUARIOS_ID
 *
 * @package App\Models
 */
class VentaHasUsuario extends Model
{
	protected $table = 'venta_has_usuarios';
	protected $primaryKey = 'ID_VENTA_ASESOR';
	public $timestamps = false;

	protected $casts = [
		'VENTA_ID' => 'int',
		'USUARIOS_ID' => 'int'
	];

	protected $fillable = [
		'VENTA_ID',
		'USUARIOS_ID'
	];
}
