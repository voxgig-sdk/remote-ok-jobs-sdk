<?php
declare(strict_types=1);

// RemoteOkJobs SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class RemoteOkJobsFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new RemoteOkJobsBaseFeature();
            case "test":
                return new RemoteOkJobsTestFeature();
            default:
                return new RemoteOkJobsBaseFeature();
        }
    }
}
