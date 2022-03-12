<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class CourseGradeTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'course_id' => $info->course_id,
            'user_id' => $info->user_id,
            'course_module_id' => $info->course_module_id,
            'user_fullname' => $info->user_fullname,
            'final_grade' => $info->final_grade,
            'content' => $info->content,
            'play_status' => $info->play_status,
            'status' => $info->status
        ];
    }
}
