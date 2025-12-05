<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

        protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
   {
       return Notification::make()
           ->success()
           ->title('User Created')
           ->body('User Created Successfully.');
   }
}
