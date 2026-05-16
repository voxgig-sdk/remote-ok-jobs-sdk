# RemoteOkJobs SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

RemoteOkJobsUtility.registrar = ->(u) {
  u.clean = RemoteOkJobsUtilities::Clean
  u.done = RemoteOkJobsUtilities::Done
  u.make_error = RemoteOkJobsUtilities::MakeError
  u.feature_add = RemoteOkJobsUtilities::FeatureAdd
  u.feature_hook = RemoteOkJobsUtilities::FeatureHook
  u.feature_init = RemoteOkJobsUtilities::FeatureInit
  u.fetcher = RemoteOkJobsUtilities::Fetcher
  u.make_fetch_def = RemoteOkJobsUtilities::MakeFetchDef
  u.make_context = RemoteOkJobsUtilities::MakeContext
  u.make_options = RemoteOkJobsUtilities::MakeOptions
  u.make_request = RemoteOkJobsUtilities::MakeRequest
  u.make_response = RemoteOkJobsUtilities::MakeResponse
  u.make_result = RemoteOkJobsUtilities::MakeResult
  u.make_point = RemoteOkJobsUtilities::MakePoint
  u.make_spec = RemoteOkJobsUtilities::MakeSpec
  u.make_url = RemoteOkJobsUtilities::MakeUrl
  u.param = RemoteOkJobsUtilities::Param
  u.prepare_auth = RemoteOkJobsUtilities::PrepareAuth
  u.prepare_body = RemoteOkJobsUtilities::PrepareBody
  u.prepare_headers = RemoteOkJobsUtilities::PrepareHeaders
  u.prepare_method = RemoteOkJobsUtilities::PrepareMethod
  u.prepare_params = RemoteOkJobsUtilities::PrepareParams
  u.prepare_path = RemoteOkJobsUtilities::PreparePath
  u.prepare_query = RemoteOkJobsUtilities::PrepareQuery
  u.result_basic = RemoteOkJobsUtilities::ResultBasic
  u.result_body = RemoteOkJobsUtilities::ResultBody
  u.result_headers = RemoteOkJobsUtilities::ResultHeaders
  u.transform_request = RemoteOkJobsUtilities::TransformRequest
  u.transform_response = RemoteOkJobsUtilities::TransformResponse
}
