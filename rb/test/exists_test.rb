# RemoteOkJobs SDK exists test

require "minitest/autorun"
require_relative "../RemoteOkJobs_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = RemoteOkJobsSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
