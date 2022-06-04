<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nome
 * @property Carbon $data
 * @property string $morada
 * @property Carbon $nascimento
 * @property string $indicacao
 * @property int $qtdsessoes
 * @property string $escolaridade
 * @property string $telefone
 * @property string $email
 * @property string $nif
 * @property string $familiar
 * @property string $queixa
 * 
 * @property Collection|Historico[] $historicos
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $timestamps = false;

	protected $casts = [
		'qtdsessoes' => 'int',
		'familiar' => 'int'
	];

	protected $dates = [
		'data',
		'nascimento'
	];

	protected $fillable = [
		'nome',
		'data',
		'morada',
		'nascimento',
		'indicacao',
		'qtdsessoes',
		'escolaridade',
		'telefone',
		'email',
		'nif',
		'familiar',
		'queixa'
	];

	public function historicos()
	{
		return $this->hasMany(Historico::class, 'idc');
	}
}
