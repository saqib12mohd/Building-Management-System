<?php

namespace App\Filament\Resources\Transcations\Pages;

use App\Filament\Resources\Transcations\TranscationResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditTranscation extends EditRecord
{
    protected static string $resource = TranscationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            Action::make('print')
                ->label('Print')
                ->url(fn() => route('transactions.print', $this->record->id))
                ->openUrlInNewTab()
                ->icon('heroicon-o-printer'),

        ];
    }

        protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Transcation Updated')
            ->body('Transcation updated successfully.');
    }
}
