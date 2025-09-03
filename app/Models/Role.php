<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $ID_ROL
 * @property string $CARGO
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'ID_ROL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ROL' => 'int'
	];

	protected $fillable = [
		'CARGO'
	];
}
