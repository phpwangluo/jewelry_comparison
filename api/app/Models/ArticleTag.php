<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleTag
 * 
 * @property int $id
 * @property int $article_id
 * @property string $tag_name
 * @property int $site_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class ArticleTag extends Model
{
	protected $table = 'article_tags';

	protected $casts = [
		'article_id' => 'int',
		'site_id' => 'int'
	];

	protected $fillable = [
		'article_id',
		'tag_name',
		'site_id'
	];
}
