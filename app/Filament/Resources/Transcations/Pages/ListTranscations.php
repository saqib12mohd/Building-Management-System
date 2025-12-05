<?php

namespace App\Filament\Resources\Transcations\Pages;

use App\Filament\Resources\Transcations\TranscationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Filters\SelectFilter;

class ListTranscations extends ListRecords
{
    protected static string $resource = TranscationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Add New Transcation'),
        ];
        
    }       

}
