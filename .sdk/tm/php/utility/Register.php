<?php
declare(strict_types=1);

// RemoteOkJobs SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

RemoteOkJobsUtility::setRegistrar(function (RemoteOkJobsUtility $u): void {
    $u->clean = [RemoteOkJobsClean::class, 'call'];
    $u->done = [RemoteOkJobsDone::class, 'call'];
    $u->make_error = [RemoteOkJobsMakeError::class, 'call'];
    $u->feature_add = [RemoteOkJobsFeatureAdd::class, 'call'];
    $u->feature_hook = [RemoteOkJobsFeatureHook::class, 'call'];
    $u->feature_init = [RemoteOkJobsFeatureInit::class, 'call'];
    $u->fetcher = [RemoteOkJobsFetcher::class, 'call'];
    $u->make_fetch_def = [RemoteOkJobsMakeFetchDef::class, 'call'];
    $u->make_context = [RemoteOkJobsMakeContext::class, 'call'];
    $u->make_options = [RemoteOkJobsMakeOptions::class, 'call'];
    $u->make_request = [RemoteOkJobsMakeRequest::class, 'call'];
    $u->make_response = [RemoteOkJobsMakeResponse::class, 'call'];
    $u->make_result = [RemoteOkJobsMakeResult::class, 'call'];
    $u->make_point = [RemoteOkJobsMakePoint::class, 'call'];
    $u->make_spec = [RemoteOkJobsMakeSpec::class, 'call'];
    $u->make_url = [RemoteOkJobsMakeUrl::class, 'call'];
    $u->param = [RemoteOkJobsParam::class, 'call'];
    $u->prepare_auth = [RemoteOkJobsPrepareAuth::class, 'call'];
    $u->prepare_body = [RemoteOkJobsPrepareBody::class, 'call'];
    $u->prepare_headers = [RemoteOkJobsPrepareHeaders::class, 'call'];
    $u->prepare_method = [RemoteOkJobsPrepareMethod::class, 'call'];
    $u->prepare_params = [RemoteOkJobsPrepareParams::class, 'call'];
    $u->prepare_path = [RemoteOkJobsPreparePath::class, 'call'];
    $u->prepare_query = [RemoteOkJobsPrepareQuery::class, 'call'];
    $u->result_basic = [RemoteOkJobsResultBasic::class, 'call'];
    $u->result_body = [RemoteOkJobsResultBody::class, 'call'];
    $u->result_headers = [RemoteOkJobsResultHeaders::class, 'call'];
    $u->transform_request = [RemoteOkJobsTransformRequest::class, 'call'];
    $u->transform_response = [RemoteOkJobsTransformResponse::class, 'call'];
});
