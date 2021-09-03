<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * 
 * @property int $id
 * @property int $type
 * @property string $first_name
 * @property string $last_name
 * @property string $profile
 * @property string $email
 * @property string|null $photo
 * @property string $home_page
 * @property int $site_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Author extends Model
{
	protected $table = 'authors';

	protected $casts = [
		'type' => 'int',
		'site_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'type',
		'first_name',
		'last_name',
		'profile',
		'email',
		'photo',
		'home_page',
		'site_id',
		'status'
	];
}
