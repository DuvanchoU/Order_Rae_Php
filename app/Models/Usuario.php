<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $ID_USUARIO
 * @property string $NOMBRES
 * @property string $APELLIDOS
 * @property int $TIPO_DOCUMENTO
 * @property string $CORREO
 * @property int $PASSWORD
 * @property string $GENERO
 * @property string $TELEFONO
 * @property string $ESTADO
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATED_AT
 * @property int $ROLES_ID_ROL
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'ID_USUARIO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USUARIO' => 'int',
		'TIPO_DOCUMENTO' => 'int',
		'PASSWORD' => 'int',
		'CREATED_AT' => 'datetime',
		'UPDATED_AT' => 'datetime',
		'ROLES_ID_ROL' => 'int'
	];

	protected $fillable = [
		'NOMBRES',
		'APELLIDOS',
		'TIPO_DOCUMENTO',
		'CORREO',
		'PASSWORD',
		'GENERO',
		'TELEFONO',
		'ESTADO',
		'CREATED_AT',
		'UPDATED_AT',
		'ROLES_ID_ROL'
	];
}
