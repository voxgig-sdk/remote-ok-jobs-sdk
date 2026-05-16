<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility: feature_add

class RemoteOkJobsFeatureAdd
{
    public static function call(RemoteOkJobsContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
