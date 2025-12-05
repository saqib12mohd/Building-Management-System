<?php

namespace App\Filament\Resources\Transcations\Pages;

use App\Filament\Resources\Transcations\TranscationResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateTranscation extends CreateRecord
{
    protected static string $resource = TranscationResource::class;

        protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
   {
       return Notification::make()
           ->success()
           ->title('Transcation Created')
           ->body('Transcation Created Successfully.');
   }
}
