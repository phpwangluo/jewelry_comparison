<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $tag_name
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'tag_name',
		'status'
	];
}
