# RemoteOkJobs SDK configuration

module RemoteOkJobsConfig
  def self.make_config
    {
      "main" => {
        "name" => "RemoteOkJobs",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://remoteok.com/api",
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "get_all_job" => {},
        },
      },
      "entity" => {
        "get_all_job" => {
          "fields" => [
            {
              "active" => true,
              "name" => "disclaimer",
              "req" => false,
              "type" => "`$STRING`",
              "index$" => 0,
            },
            {
              "active" => true,
              "name" => "term",
              "req" => false,
              "type" => "`$STRING`",
              "index$" => 1,
            },
          ],
          "name" => "get_all_job",
          "op" => {
            "list" => {
              "input" => "data",
              "name" => "list",
              "points" => [
                {
                  "active" => true,
                  "args" => {},
                  "method" => "GET",
                  "orig" => "/",
                  "parts" => [],
                  "select" => {},
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body`",
                  },
                  "index$" => 0,
                },
              ],
              "key$" => "list",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    RemoteOkJobsFeatures.make_feature(name)
  end
end
