<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class AssignmentTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'assignment_id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'course_id' => $info->course_id,
            'user_id' => $info->user_id,
            'start_time' => $info->start_time,
            'end_time' => $info->end_time,
            'version' => $info->version,
            'status' => $info->status,
            'open_view_score' => $info->open_view_score,
            'score' => $info->score,
            'quiz_id' => $info->quiz_id,
            'time' => $info->time,
        ];
    }
}
