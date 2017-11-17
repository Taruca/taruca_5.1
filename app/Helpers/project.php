<?php
/**
 * 获取已过时间占总时间比例，用于时间进度条
 * @input yyyy-mm-dd
 */
function getRateOfTime($beginDate, $endDate) {
    $beginTime = $beginDate ." 00:00:00";
    $endTime = $endDate ." 00:00:00";

    $time = strtotime($endTime) - strtotime($beginTime);
    if($time <= 0) {
        return $rateString = '100%';
    }

    $timePassed = time() - strtotime($beginTime);
    if($timePassed < 0) {
        return $rateString = '0%';
    }

    $rate = round($timePassed / $time, 2);
    if($rate > 1) {
        $rate = 1;
    }
    $rateString = 100 * $rate .'%';

    return $rateString;
}

/**
 * 通过projectId获取projectName
 */
function getProjectNameById($projectId) {
    $project = \App\Models\Project::where('project_id', $projectId)->value('project_name');
    return $project;
}

/**
 * 通过projectId获取projectName
 */
function getModuleNameById($moduleId) {
    $module = \App\Models\Module::where('module_id', $moduleId)->value('module_name');
    return $module;
}
