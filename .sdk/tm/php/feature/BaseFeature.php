<?php
declare(strict_types=1);

// RemoteOkJobs SDK base feature

class RemoteOkJobsBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(RemoteOkJobsContext $ctx, array $options): void {}
    public function PostConstruct(RemoteOkJobsContext $ctx): void {}
    public function PostConstructEntity(RemoteOkJobsContext $ctx): void {}
    public function SetData(RemoteOkJobsContext $ctx): void {}
    public function GetData(RemoteOkJobsContext $ctx): void {}
    public function GetMatch(RemoteOkJobsContext $ctx): void {}
    public function SetMatch(RemoteOkJobsContext $ctx): void {}
    public function PrePoint(RemoteOkJobsContext $ctx): void {}
    public function PreSpec(RemoteOkJobsContext $ctx): void {}
    public function PreRequest(RemoteOkJobsContext $ctx): void {}
    public function PreResponse(RemoteOkJobsContext $ctx): void {}
    public function PreResult(RemoteOkJobsContext $ctx): void {}
    public function PreDone(RemoteOkJobsContext $ctx): void {}
    public function PreUnexpected(RemoteOkJobsContext $ctx): void {}
}
