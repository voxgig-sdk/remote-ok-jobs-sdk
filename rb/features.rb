# RemoteOkJobs SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module RemoteOkJobsFeatures
  def self.make_feature(name)
    case name
    when "base"
      RemoteOkJobsBaseFeature.new
    when "test"
      RemoteOkJobsTestFeature.new
    else
      RemoteOkJobsBaseFeature.new
    end
  end
end
