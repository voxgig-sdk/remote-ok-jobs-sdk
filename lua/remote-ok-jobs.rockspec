package = "voxgig-sdk-remote-ok-jobs"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/remote-ok-jobs-sdk.git"
}
description = {
  summary = "RemoteOkJobs SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["remote-ok-jobs_sdk"] = "remote-ok-jobs_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
