<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;

class CourseEnrollTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
            'user_id' => $info->user_id,
//            'course_id' => $info->course_id,
//            'role_id' => $info->role_id,
//            'course_team_id' => $info->course_team_id,
            'enroll_code' => $info->enroll_code,
            'fullname' => $info->fullname,
            'email' => $info->email,
            'phone' => $info->phone,
            'username' => @$info->user->username,
        ];
    }
}
