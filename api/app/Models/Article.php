<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property int $id
 * @property int $type
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property Carbon $publish_time
 * @property string $abstract
 * @property int $view_count
 * @property int $share_count
 * @property string $photo
 * @property int $category_id
 * @property int $carousel
 * @property int $permit_comment
 * @property string $uri
 * @property string $page_title
 * @property string $page_description
 * @property string $page_keywords
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
class Article extends Model
{
	protected $table = 'articles';

	protected $casts = [
		'type' => 'int',
		'author_id' => 'int',
		'view_count' => 'int',
		'share_count' => 'int',
		'category_id' => 'int',
		'carousel' => 'int',
		'permit_comment' => 'int',
		'site_id' => 'int',
		'check_status' => 'int',
		'checker_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'publish_time',
		'check_time'
	];

	protected $fillable = [
		'type',
		'title',
		'content',
		'author_id',
		'publish_time',
		'abstract',
		'view_count',
		'share_count',
		'photo',
		'category_id',
		'carousel',
		'permit_comment',
		'uri',
		'page_title',
		'page_description',
		'page_keywords',
		'site_id',
		'check_status',
		'check_time',
		'checker_id',
		'status'
	];
	function article_categories(){
	    return $this->hasOne(ArticleCategory::class,'article_id','id');
    }
}
