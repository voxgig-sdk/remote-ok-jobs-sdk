package voxgigremoteokjobssdk

import (
	"github.com/voxgig-sdk/remote-ok-jobs-sdk/go/core"
	"github.com/voxgig-sdk/remote-ok-jobs-sdk/go/entity"
	"github.com/voxgig-sdk/remote-ok-jobs-sdk/go/feature"
	_ "github.com/voxgig-sdk/remote-ok-jobs-sdk/go/utility"
)

// Type aliases preserve external API.
type RemoteOkJobsSDK = core.RemoteOkJobsSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type RemoteOkJobsEntity = core.RemoteOkJobsEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type RemoteOkJobsError = core.RemoteOkJobsError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewGetAllJobEntityFunc = func(client *core.RemoteOkJobsSDK, entopts map[string]any) core.RemoteOkJobsEntity {
		return entity.NewGetAllJobEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewRemoteOkJobsSDK = core.NewRemoteOkJobsSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
