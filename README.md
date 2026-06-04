# RemoteOkJobs SDK

Browse 30,000+ remote job listings from Remote OK, the remote-only jobs board

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Remote OK Jobs API

[Remote OK](https://remoteok.com/) is a remote-only job board that aggregates and publishes thousands of remote job postings across software engineering, design, marketing, customer support, and other categories. Its public API exposes the same listings that appear on the site.

The API is a single JSON endpoint that returns all currently available listings. Each listing typically includes:

- Identifiers: `id`, `slug`
- Employer and role: `company`, `company_logo`, `position`
- Timestamps: `date`, `epoch`, `last_updated`
- Geography: `location`
- Content: `description`, `tags`
- Compensation: `salary_min`, `salary_max`
- Links: `url` (listing) and `apply_url`

The endpoint is served with CORS enabled and does not require authentication. Postings often embed a spam-prevention keyword (e.g. "FEASIBLE", "PLUSH") that applicants are expected to quote, so consumers should preserve the `description` field intact when rendering jobs.

## Try it

**TypeScript**
```bash
npm install remote-ok-jobs
```

**Python**
```bash
pip install remote-ok-jobs-sdk
```

**PHP**
```bash
composer require voxgig/remote-ok-jobs-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/remote-ok-jobs-sdk/go
```

**Ruby**
```bash
gem install remote-ok-jobs-sdk
```

**Lua**
```bash
luarocks install remote-ok-jobs-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { RemoteOkJobsSDK } from 'remote-ok-jobs'

const client = new RemoteOkJobsSDK({})

// List all getalljobs
const getalljobs = await client.GetAllJob().list()
```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o remote-ok-jobs-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "remote-ok-jobs": {
      "command": "/abs/path/to/remote-ok-jobs-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **GetAllJob** | All current remote job listings as a JSON array, served from the single endpoint `GET /api`. | `/` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from remoteokjobs_sdk import RemoteOkJobsSDK

client = RemoteOkJobsSDK({})

# List all getalljobs
getalljobs, err = client.GetAllJob(None).list(None, None)
```

### PHP

```php
<?php
require_once 'remoteokjobs_sdk.php';

$client = new RemoteOkJobsSDK([]);

// List all getalljobs
[$getalljobs, $err] = $client->GetAllJob(null)->list(null, null);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/remote-ok-jobs-sdk/go"

client := sdk.NewRemoteOkJobsSDK(map[string]any{})

// List all getalljobs
getalljobs, err := client.GetAllJob(nil).List(nil, nil)
```

### Ruby

```ruby
require_relative "RemoteOkJobs_sdk"

client = RemoteOkJobsSDK.new({})

# List all getalljobs
getalljobs, err = client.GetAllJob(nil).list(nil, nil)
```

### Lua

```lua
local sdk = require("remote-ok-jobs_sdk")

local client = sdk.new({})

-- List all getalljobs
local getalljobs, err = client:GetAllJob(nil):list(nil, nil)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = RemoteOkJobsSDK.test()
const result = await client.GetAllJob().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = RemoteOkJobsSDK.test(None, None)
result, err = client.GetAllJob(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = RemoteOkJobsSDK::test(null, null);
[$result, $err] = $client->GetAllJob(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.GetAllJob(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = RemoteOkJobsSDK.test(nil, nil)
result, err = client.GetAllJob(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:GetAllJob(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Remote OK Jobs API

- Upstream: [https://remoteok.com/](https://remoteok.com/)
- API docs: [https://remoteok.com/api](https://remoteok.com/api)

- Attribution required: link back to the listing URL on Remote OK with a do-follow link (no `nofollow`).
- Must mention Remote OK as the source so traffic flows back.
- The Remote OK name may be used freely; the Remote OK logo requires written permission.
- Non-compliance may result in access being suspended.

---

Generated from the Remote OK Jobs API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
