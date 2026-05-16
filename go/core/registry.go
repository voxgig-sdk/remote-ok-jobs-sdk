package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewGetAllJobEntityFunc func(client *RemoteOkJobsSDK, entopts map[string]any) RemoteOkJobsEntity

