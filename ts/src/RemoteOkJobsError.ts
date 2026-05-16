
import { Context } from './Context'


class RemoteOkJobsError extends Error {

  isRemoteOkJobsError = true

  sdk = 'RemoteOkJobs'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  RemoteOkJobsError
}

