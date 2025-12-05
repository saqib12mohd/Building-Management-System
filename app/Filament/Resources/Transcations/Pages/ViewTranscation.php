<?php

namespace App\Filament\Resources\Transcations\Pages;

use App\Filament\Resources\Transcations\TranscationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTranscation extends ViewRecord
{
    protected static string $resource = TranscationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
