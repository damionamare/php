<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuestionTransformer extends Transformer
{
    public function __construct()
    {
        $this->questionAnswerTransformer = new QuestionAnswerTransformer();
    }

    public function transform($info)
    {
        $answer = [];
        if (count($info->answer) > 0) {
            $answer = $this->questionAnswerTransformer->transform_collection($info->answer->all());
        }
        return [
            'id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'question_category_id' => $info->question_category_id,
            'grade_id' => $info->grade_id,
            'subject_id' => $info->subject_id,
            'name' => $info->name,
            'content' => $info->content,
            'solution_guide' => $info->solution_guide,
            'type' => $info->type,
            'status' => $info->status,
            'code' => $info->code,
            'answer' => $answer
        ];
    }
}
