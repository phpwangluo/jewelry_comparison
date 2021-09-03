<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleCategory
 * 
 * @property int $id
 * @property int $article_id
 * @property int $category_id
 * @property int $site_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class ArticleCategory extends Model
{
	protected $table = 'article_categories';

	protected $casts = [
		'article_id' => 'int',
		'category_id' => 'int',
		'site_id' => 'int'
	];

	protected $fillable = [
		'article_id',
		'category_id',
		'site_id'
	];
}
