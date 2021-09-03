<?php

namespace App\Transformers;

use App\Models\Article;
use App\Models\ArticleCategory;
use League\Fractal\TransformerAbstract;


class ArticleCategoriesTransformer extends TransformerAbstract
{
    public function transform(ArticleCategory $task)
    {
        return [
            'category_id' => $task->category_id,
        ];
    }
}
