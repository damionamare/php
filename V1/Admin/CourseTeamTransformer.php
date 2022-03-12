<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class CourseTeamTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'course_id' => $info->course_id,
            'code' => $info->code,
            'name' => $info->name,
            'sort_index' => $info->sort_index,
            'status' => $info->status
        ];
    }
}
