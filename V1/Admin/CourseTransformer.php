<?php

namespace App\Transformers\V1\Admin;

use App\Transformers\Transformer;
use Carbon\Carbon;
use MongoDB\BSON\UTCDateTime;

class CourseTransformer extends Transformer
{

    public function transform($info)
    {
        $grade_name = '';
        $subject_name = '';
        $school_year_name = '';
        $school_year_code = '';
        $moetUnit_name = '';
        if (!empty($info->grade)) {
            $grade_name = $info->grade->name;
        }
        if (!empty($info->subject)) {
            $subject_name = $info->subject->name;
        }
        if (!empty($info->schoolYear)) {
            $school_year_code = $info->schoolYear->code;
            $school_year_name = $info->schoolYear->name;
        }

        if (!empty($info->moetUnit)) {
            $moetUnit_name = $info->moetUnit->name;
        }
        if (isset($info->start_date)) {
            $startDate = $info->start_date instanceof UTCDateTime ?
                (double)convertUTCDateTimeToTimestamp($info->start_date) :
                (double)Carbon::parse($info->start_date)->timestamp;
        } else {
            $startDate = null;
        }

        if (isset($info->end_date)) {
            $endDate = $info->end_date instanceof UTCDateTime ?
                (double)convertUTCDateTimeToTimestamp($info->end_date) :
                (double)Carbon::parse($info->end_date)->timestamp;
        } else {
            $endDate = null;
        }

        return [
            'id'               => $info->_id,
            'tenant_id'        => $info->tenant_id,
            'sis_id'           => $info->sis_id,
            'code'             => $info->code,
            'name'             => $info->name,
            'image'            => asset($info->image),
            'description'      => $info->description,
            'grade_id'         => $info->grade_id,
            'subject_id'       => $info->subject_id,
            'school_year_id'   => $info->school_year_id,
            'moet_unit_id'     => $info->moet_unit_id,
            'start_date'       => $startDate,
            'end_date'         => $endDate,
            'status'           => $info->status,
            'grade_name'       => $grade_name,
            'subject_name'     => $subject_name,
            'school_year_code' => $school_year_code,
            'school_year_name' => $school_year_name,
            'moetUnit_name' => $moetUnit_name,
        ];
    }
}
