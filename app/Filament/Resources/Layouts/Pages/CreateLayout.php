<?php

namespace App\Filament\Resources\Layouts\Pages;

use App\Filament\Resources\Layouts\LayoutResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateLayout extends CreateRecord
{
    protected static string $resource = LayoutResource::class;

    protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
   {
       return Notification::make()
           ->success()
           ->title('Layout Created')
           ->body('Layout Created Successfully.');
   }

}
