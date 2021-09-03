<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property int $type
 * @property int $page_id
 * @property int $ordinal_number
 * @property int $site_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'type' => 'int',
		'page_id' => 'int',
		'ordinal_number' => 'int',
		'site_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'page_id',
		'ordinal_number',
		'site_id',
		'status'
	];
}
