<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuizTransformer extends Transformer
{
//    public function __construct()
//    {
//        $this->questionAnswerTransformer = new QuestionAnswerTransformer();
//    }

    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'course_id' => $info->course_id,
            'code' => $info->code,
            'subject_id' => $info->subject_id,
            'name' => $info->name,
            'start_date' => $info->start_date,
            'end_date' => $info->end_date,
            'time' => $info->time,
            'open_view_score' => $info->open_view_score,
            'score' => $info->score,
            'sort_index' => $info->sort_index,
            'number_of_time' => $info->number_of_time,
            'status' => $info->status
        ];
    }
}
