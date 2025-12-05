<?php

namespace App\Filament\Resources\Layouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LayoutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Layout name')
                    ->toggleable(isToggledHiddenByDefault: false),
                    
                TextColumn::make('building.name')
                     ->label('Building name')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                // TextColumn::make('type')
                //     ->label('Building Type')
                //     ->searchable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('sqt')
                    ->label(' Total Size (sq ft)')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                
                TextColumn::make('view')
                    ->label('View')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),

                ImageColumn::make('floorplan')
                ->label('Floor Plan (Blueprint)')
                ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                
                // IconColumn::make('attached')
                //     ->label('Attach Bathroom')
                //     ->boolean()
                //     ->toggleable(isToggledHiddenByDefault: true),
                
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
