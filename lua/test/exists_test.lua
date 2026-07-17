-- RemoteOkJobs SDK exists test

local sdk = require("remote-ok-jobs_sdk")

describe("RemoteOkJobsSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
