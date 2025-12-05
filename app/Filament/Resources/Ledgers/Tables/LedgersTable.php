<?php

namespace App\Filament\Resources\Ledgers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LedgersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Ledger name')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('phone')
                    ->searchable()
                    ->label('Phone Number')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('address')
                    ->searchable()
                    ->wrap()
                    ->label('Address')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('occupation')
                    ->searchable()
                    ->label('Occupation')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('group')
                    ->searchable()
                    ->label('Group')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('dob')
                    ->searchable()
                    ->label('Date of Birth')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('country')
                    ->searchable()
                    ->label('Country')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('city')
                    ->searchable()
                    ->label('City')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('state')
                    ->searchable()
                    ->label('State')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('zip')
                    ->searchable()
                    ->label('Zip Code')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('street')
                    ->searchable()
                    ->label('Street')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('idname')
                    ->searchable()
                    ->label('ID Name')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('idno')
                    ->searchable()
                    ->label('ID Number')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
