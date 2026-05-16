# RemoteOkJobs SDK utility: make_context
require_relative '../core/context'
module RemoteOkJobsUtilities
  MakeContext = ->(ctxmap, basectx) {
    RemoteOkJobsContext.new(ctxmap, basectx)
  }
end
