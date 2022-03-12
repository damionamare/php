<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class CourseProgramTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'course_id' => $info->course_id,
            'name' => $info->name
        ];
    }
}
