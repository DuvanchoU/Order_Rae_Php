<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PermisosHasRole
 * 
 * @property int $ID_PERMISOS_ROL
 * @property int $PERMISOS_ID_PERMISOS
 * @property int $ROLES_ID_ROL
 *
 * @package App\Models
 */
class PermisosHasRole extends Model
{
	protected $table = 'permisos_has_roles';
	protected $primaryKey = 'ID_PERMISOS_ROL';
	public $timestamps = false;

	protected $casts = [
		'PERMISOS_ID_PERMISOS' => 'int',
		'ROLES_ID_ROL' => 'int'
	];

	protected $fillable = [
		'PERMISOS_ID_PERMISOS',
		'ROLES_ID_ROL'
	];
}
