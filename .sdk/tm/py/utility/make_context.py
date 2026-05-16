# RemoteOkJobs SDK utility: make_context

from core.context import RemoteOkJobsContext


def make_context_util(ctxmap, basectx):
    return RemoteOkJobsContext(ctxmap, basectx)
