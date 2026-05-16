<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility: prepare_body

class RemoteOkJobsPrepareBody
{
    public static function call(RemoteOkJobsContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
