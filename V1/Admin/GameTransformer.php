<?php

namespace App\Transformers\V1\Admin;

use App\Models\CourseModule;
use App\Transformers\Transformer;

class GameTransformer extends Transformer
{
    public function transform($info)
    {

        $transform = [
            'game_id' => $info->_id,

            'tenant_id' => $info->tenant_id,
            'sis_id' => $info->sis_id,
            'name' => $info->name,
            'level' => $info->level,
            'play_url' => $info->play_url,
            'image' => $info->image,
            'description' => $info->description,
//            'grade_ids' => $info->grade_ids,
//            'subject_ids' => $info->subject_ids,
            'settings' => $info->settings,
            'status' => $info->status,
            'code' => $info->code,
        ];

        if (isset($info->grade_id)) {
            $transform['grade_id'] = $info->grade_id;
        }
        if (isset($info->grade_name)) {
            $transform['grade_name'] = $info->grade_name;
        }
        if (isset($info->subject_id)) {
            $transform['subject_id'] = $info->subject_id;
        }
        if (isset($info->subject_name)) {
            $transform['subject_name'] = $info->subject_name;
        }
//        if (isset($info->access_code)) {
        $transform['access_code'] = $this->getAccessCode($info);
//        }

        return $transform;
    }

    public function getAccessCode($info)
    {
        $course_module = CourseModule::where('object_type', 'game')->where('object_id', $info->_id)->first();
        if (empty($course_module)) {
            return null;
        }
        $course_module_parent_id = $course_module->course_module_parent_id;
        $course_module_label = CourseModule::where('_id', $course_module_parent_id)->first();
        if (empty($course_module_label)) {
            return null;
        }
        return $course_module_label->access_code;
    }
}
