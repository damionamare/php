<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class MoetUnitTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'code' => $info->code,
            'name' => $info->name
        ];
    }
}
