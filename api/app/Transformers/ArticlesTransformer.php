<?php

namespace App\Transformers;

use App\Models\Article;
use League\Fractal\TransformerAbstract;


class ArticlesTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['article_categories'];
    public function transform(Article $task)
    {
        return [
            'id' => $task->id,
            'text' => $task->title,
            'completed' => $task->carousel ? 'yes' : 'no',
            //'link' => route('articles.show', ['id' => $task->id])
        ];
    }
    public function includearticleCategories(Article $task)
    {
        $article_categories = $task->article_categories;
        return $this->item($article_categories, new ArticleCategoriesTransformer());
    }
}
