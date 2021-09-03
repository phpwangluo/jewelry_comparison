<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PageSetting
 * 
 * @property int $id
 * @property int $page_type
 * @property string $content
 * @property string $abstract
 * @property string $photo
 * @property string $uri
 * @property string $page_title
 * @property string $page_description
 * @property string $page_keywords
 * @property int $site_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class PageSetting extends Model
{
	protected $table = 'page_settings';

	protected $casts = [
		'page_type' => 'int',
		'site_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'page_type',
		'content',
		'abstract',
		'photo',
		'uri',
		'page_title',
		'page_description',
		'page_keywords',
		'site_id',
		'status'
	];
}
