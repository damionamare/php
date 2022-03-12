<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuestionCategoryTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'code' => $info->code,
            'name' => $info->name,
            'parent_id' => $info->parent_id,
            'grade_id' => $info->grade_id,
            'subject_id' => $info->subject_id,
            'sort_index' => $info->sort_index,
            'status' => $info->status
        ];
    }
}
