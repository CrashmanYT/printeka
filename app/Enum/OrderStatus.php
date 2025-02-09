<?php

namespace App\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Processing = 'processing';
    case Completed = 'completed';
    case Cancelled = 'cancelled';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Processing => 'Processing',
            self::Completed => 'Completed',
            self::Cancelled => 'Cancelled',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Pending => 'info',
            self::Processing => 'warning',
            self::Completed => 'success',
            self::Cancelled => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Pending => 'heroicon-o-clock',
            self::Processing => 'heroicon-o-arrow-path',
            self::Completed => 'heroicon-o-check',
            self::Cancelled => 'heroicon-o-x-mark',
        };
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return match ($this) {
            self::Pending => 'pending',
            self::Processing => 'processing',
            self::Completed => 'completed',
            self::Cancelled => 'cancelled',
        };
    }
}
