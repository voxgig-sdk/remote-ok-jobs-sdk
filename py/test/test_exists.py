# ProjectName SDK exists test

import pytest
from remoteokjobs_sdk import RemoteOkJobsSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = RemoteOkJobsSDK.test(None, None)
        assert testsdk is not None
