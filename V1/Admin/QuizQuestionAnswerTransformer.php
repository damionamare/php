<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuizQuestionAnswerTransformer extends Transformer
{
//    public function __construct()
//    {
//        $this->questionAnswerTransformer = new QuestionAnswerTransformer();
//    }

    public function transform($info)
    {
        return [
            'quiz_question_answer_id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'content' => $info->content,
            'is_true' => $info->is_true,
            'percent_score' => $info->percent_score,
            'question_id' => $info->question_id,
            'quiz_id' => $info->question_id,
        ];
    }
}
