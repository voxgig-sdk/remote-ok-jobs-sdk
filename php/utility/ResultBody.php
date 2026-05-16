<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility: result_body

class RemoteOkJobsResultBody
{
    public static function call(RemoteOkJobsContext $ctx): ?RemoteOkJobsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
