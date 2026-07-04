# frozen_string_literal: true

# Typed models for the RemoteOkJobs SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# GetAllJob entity data model.
#
# @!attribute [rw] disclaimer
#   @return [String, nil]
#
# @!attribute [rw] term
#   @return [String, nil]
GetAllJob = Struct.new(
  :disclaimer,
  :term,
  keyword_init: true
)

# Match filter for GetAllJob#list (any subset of GetAllJob fields).
#
# @!attribute [rw] disclaimer
#   @return [String, nil]
#
# @!attribute [rw] term
#   @return [String, nil]
GetAllJobListMatch = Struct.new(
  :disclaimer,
  :term,
  keyword_init: true
)

