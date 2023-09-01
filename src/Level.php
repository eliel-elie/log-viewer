<?php

namespace Elielelie\LogViewer;

class Level
{
    const Debug = 'debug';

    const Info = 'info';

    const Notice = 'notice';

    const Warning = 'warning';

    const Error = 'error';

    const Critical = 'critical';

    const Alert = 'alert';

    const Emergency = 'emergency';

    const Processing = 'processing';

    const Processed = 'processed';

    const Failed = 'failed';

    const None = '';

    public string $value;

    public function __construct(string $value = null)
    {
        $this->value = $value ?? self::None;
    }

    public static function cases(): array
    {
        return [
            self::Debug,
            self::Info,
            self::Notice,
            self::Warning,
            self::Error,
            self::Critical,
            self::Alert,
            self::Emergency,
            self::Processing,
            self::Processed,
            self::Failed,
            self::None,
        ];
    }

    public static function from(string $value = null): self
    {
        return new self($value);
    }

    public function getName(): string
    {
        if ($this->value === "None") {
            return "None";
        } else {
            return ucfirst($this->value);
        }
    }

    public function getClass(): string
    {
        $classes = [
            self::Processed     => "success",
            self::Debug         => "info",
            self::Info          => "info",
            self::Notice        => "info",
            self::Processing    => "info",
            self::Warning       => "warning",
            self::Failed        => "warning",
            self::Error         => "danger",
            self::Critical      => "danger",
            self::Alert         => "danger",
            self::Emergency     => "danger",
        ];

        return $classes[$this->value] ?? "none";

    }

    public static function caseValues(): array
    {
        return self::cases();
    }
}
