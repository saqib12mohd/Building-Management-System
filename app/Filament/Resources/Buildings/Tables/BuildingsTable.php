<?php

namespace App\Filament\Resources\Buildings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BuildingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Building name')
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->searchable(),

                TextColumn::make('btype')
                    ->searchable()
                    ->label('Building type')
                    ->toggleable(isToggledHiddenByDefault: false),

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

                TextColumn::make('street')
                    ->searchable()
                    ->label('Street')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('securityname')
                    ->searchable()
                    ->label('Security Name')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('securitymobile')
                    ->searchable()
                    ->label('Security Mobile')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('nooflift')
                    ->searchable()
                    ->label('No of Lift')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('activatedon')
                    ->date()
                    ->sortable()
                    ->label('Activated On')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('deactivatedon')
                    ->date()
                    ->sortable()
                    ->label('Deactivated On')
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
