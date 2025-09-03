<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 * 
 * @property int $ID_PERMISOS
 * @property string $NOMBRE_PERMISOS
 * @property string $DESCRIPCION_PERMISOS
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permisos';
	protected $primaryKey = 'ID_PERMISOS';
	public $timestamps = false;

	protected $fillable = [
		'NOMBRE_PERMISOS',
		'DESCRIPCION_PERMISOS'
	];
}
