# RemoteOkJobs SDK feature factory

from feature.base_feature import RemoteOkJobsBaseFeature
from feature.test_feature import RemoteOkJobsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: RemoteOkJobsBaseFeature(),
        "test": lambda: RemoteOkJobsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
