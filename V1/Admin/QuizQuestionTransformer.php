<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuizQuestionTransformer extends Transformer
{
    public function __construct()
    {
        $this->quizQuestionAnswerTransformer = new QuizQuestionAnswerTransformer();
    }

    public function transform($info)
    {
        $answer = [];
        if (count($info->answer) > 0) {
            $answer = $this->quizQuestionAnswerTransformer->transform_collection($info->answer->all());
        }
        return [
            'quiz_question_id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'quiz_id' => $info->quiz_id,
            'question_id' => $info->question_id,
            'question_name' => $info->question_name,
            'content' => $info->content,
            'solution_guide' => $info->solution_guide,
            'type' => $info->type,
            'quiz_question_category_id' => $info->quiz_question_category_id,
            'score' => $info->score,
            'sort_index' => $info->sort_index,
            'status' => $info->status,
            'answer' => $answer
        ];
    }
}
