<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuizQuestionCategoryTransformer extends Transformer
{
//    public function __construct()
//    {
//        $this->questionAnswerTransformer = new QuestionAnswerTransformer();
//    }

    public function transform($info)
    {
        return [
            'quiz_question_category_id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'quiz_id' => $info->quiz_id,
            'name' => $info->name,
            'parent_id' => $info->parent_id,
            'sort_index' => $info->sort_index,
            'status' => $info->status
        ];
    }
}
