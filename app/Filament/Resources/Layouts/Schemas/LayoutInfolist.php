<?php

namespace App\Filament\Resources\Layouts\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LayoutInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                ->columnSpanFull()
                ->schema([

                TextEntry::make('name')
                 ->label('Layout name')
                 ->color('primary'),

                TextEntry::make('building.name')
                 ->label('Building name')
                 ->color('primary'),

                // TextEntry::make('type')
                // ->color('primary')
                // ->label('Building type your selected'),

                TextEntry::make('sqt')
                 ->label('Total Size (sq ft)')
                 ->color('primary'),

                TextEntry::make('view')
                ->color('primary')
                 ->label('View'),

                ImageEntry::make('floorplan')
                 ->label('Floor Plan (Blueprint)'),

                //  IconEntry::make('attached')
                //  ->label('It has Attach bathroom?')
                //     ->boolean(),
                
                TextEntry::make('created_at')
                ->color('primary')
                    ->dateTime(),
                TextEntry::make('updated_at')
                ->color('primary')
                    ->dateTime(),
                    
                ])->columns(3),

            ]);
    }
}
