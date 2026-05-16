<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility: result_headers

class RemoteOkJobsResultHeaders
{
    public static function call(RemoteOkJobsContext $ctx): ?RemoteOkJobsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
