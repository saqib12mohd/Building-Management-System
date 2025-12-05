<?php

namespace App\Filament\Resources\Buildings\Pages;

use App\Filament\Resources\Buildings\BuildingResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateBuilding extends CreateRecord
{
    protected static string $resource = BuildingResource::class;

     protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
   {
       return Notification::make()
           ->success()
           ->title('Building Created')
           ->body('Building Created Successfully.');
   }
}
