# RemoteOkJobs SDK utility: feature_add
module RemoteOkJobsUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
