<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class RoleUserTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'role_id' => $info->role_id,
            'user_id' => $info->user_id,
            'moet_unit_id' => $info->moet_unit_id
        ];
    }
}
