<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;
use Carbon\Carbon;
use MongoDB\BSON\UTCDateTime;

class CourseModuleTransformer extends Transformer
{
    public function transform($info)
    {
        return [
            'id' => $info->_id,
//            'sis_id' => $info->sis_id,
            'course_id' => $info->course_id,
//            'object_type' => $info->object_type,
//            'object_id' => $info->object_id,
            'name' => $info->name,
            'access_code' => $info->access_code,
//            'description' => $info->description,
//            'max_grade' => $info->max_grade,
//            'settings' => $info->settings,
//            'course_module_parent_id' => $info->course_module_parent_id,
//            'course_module_path' => $info->course_module_path,
            'open_date' => $info->open_date instanceof UTCDateTime ?
                (double)convertUTCDateTimeToTimestamp($info->open_date) :
                (double)Carbon::parse($info->open_date)->timestamp,
            'close_date' => $info->close_date instanceof UTCDateTime ?
                (double)convertUTCDateTimeToTimestamp($info->close_date) :
                (double)Carbon::parse($info->close_date)->timestamp,
            'sort_index' => $info->sort_index,
//            'status' => $info->status,
        ];
    }
}
