<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class UserTransformer extends Transformer
{
    public function transform($info)
    {

//        $moetUnitTransformer = new MoetUnitTransformer();
        $avatar = strlen($info->avatar) > 300 ? asset('/') : asset($info->avatar);
        return [
            'id' => $info->_id,
            'tenant_id' => $info->tenant_id,
            'sis_id' => $info->sis_id,
            'code' => $info->code,
            'username' => $info->username,
            'auth_provider' => $info->auth_provider,
            'email' => $info->email,
            'phone' => $info->phone,
            'firstname' => $info->firstname,
            'lastname' => $info->lastname,
            'fullname' => $info->fullname,
            'account_group' => $info->account_group,
            'status' => $info->status,
            'avatar' => $avatar,
//            'moetUnit' => $moetUnitTransformer->transform_collection($info->roleUser->moetUnit)
        ];
    }
}
