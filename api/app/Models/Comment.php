<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $type
 * @property string $first_name
 * @property string $last_name
 * @property string $comment
 * @property string $email
 * @property string $website
 * @property int $article_id
 * @property int $site_id
 * @property int $check_status
 * @property Carbon $check_time
 * @property int $checker_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'type' => 'int',
		'article_id' => 'int',
		'site_id' => 'int',
		'check_status' => 'int',
		'checker_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'check_time'
	];

	protected $fillable = [
		'type',
		'first_name',
		'last_name',
		'comment',
		'email',
		'website',
		'article_id',
		'site_id',
		'check_status',
		'check_time',
		'checker_id',
		'status'
	];
}
