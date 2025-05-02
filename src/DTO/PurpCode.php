<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class PurpCode
{
    private string $purpCode;

    public function __construct(string $purpCode)
    {
        $this->purpCode = $purpCode;
    }

    public function getPurpCode(): string
    {
        return $this->purpCode;
    }

    public function setPurpCode(string $purpCode): void
    {
        $this->purpCode = $purpCode;
    }
}