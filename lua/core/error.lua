-- RemoteOkJobs SDK error

local RemoteOkJobsError = {}
RemoteOkJobsError.__index = RemoteOkJobsError


function RemoteOkJobsError.new(code, msg, ctx)
  local self = setmetatable({}, RemoteOkJobsError)
  self.is_sdk_error = true
  self.sdk = "RemoteOkJobs"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function RemoteOkJobsError:error()
  return self.msg
end


function RemoteOkJobsError:__tostring()
  return self.msg
end


return RemoteOkJobsError
