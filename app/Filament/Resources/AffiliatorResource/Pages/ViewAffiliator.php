<?php

namespace App\Filament\Resources\AffiliatorResource\Pages;

use App\Filament\Resources\AffiliatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAffiliator extends ViewRecord
{
    protected static string $resource = AffiliatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
