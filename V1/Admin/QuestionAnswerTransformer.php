<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class QuestionAnswerTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'content' => $info->content,
            'is_true' => $info->is_true,
            'percent_score' => $info->percent_score,
            'question_id' => $info->question_id
        ];
    }
}
