<?php

namespace App\Filament\Resources\AffiliatorResource\Pages;

use App\Filament\Resources\AffiliatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAffiliator extends EditRecord
{
    protected static string $resource = AffiliatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
