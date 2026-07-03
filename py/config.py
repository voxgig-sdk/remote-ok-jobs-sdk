# RemoteOkJobs SDK configuration


def make_config():
    return {
        "main": {
            "name": "RemoteOkJobs",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://remoteok.com/api",
            "auth": {
                "prefix": "Bearer",
            },
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "get_all_job": {},
            },
        },
        "entity": {
      "get_all_job": {
        "fields": [
          {
            "active": True,
            "name": "disclaimer",
            "req": False,
            "type": "`$STRING`",
            "index$": 0,
          },
          {
            "active": True,
            "name": "term",
            "req": False,
            "type": "`$STRING`",
            "index$": 1,
          },
        ],
        "name": "get_all_job",
        "op": {
          "list": {
            "input": "data",
            "name": "list",
            "points": [
              {
                "active": True,
                "args": {},
                "method": "GET",
                "orig": "/",
                "parts": [],
                "select": {},
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "list",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
