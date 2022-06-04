<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historico
 * 
 * @property int $id
 * @property int $idc
 * @property Carbon $datah
 * @property string $descricao
 * 
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class Historico extends Model
{
	protected $table = 'historicos';
	public $timestamps = false;

	protected $casts = [
		'idc' => 'int'
	];

	protected $dates = [
		'datah'
	];

	protected $fillable = [
		'idc',
		'datah',
		'descricao'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'idc');
	}
}
