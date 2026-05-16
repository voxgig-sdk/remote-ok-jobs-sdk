<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class RemoteOkJobsMakeContext
{
    public static function call(array $ctxmap, ?RemoteOkJobsContext $basectx): RemoteOkJobsContext
    {
        return new RemoteOkJobsContext($ctxmap, $basectx);
    }
}
