<?php

namespace App\Filament\Resources\Buildings\Schemas;

use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BuildingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                ->columnSpanFull()
                ->schema([

                TextEntry::make('name')
                ->label('Building name')
                 ->color('primary'),

                TextEntry::make('btype')
                ->label('Building type')
                 ->color('primary'),

                TextEntry::make('activatedon')
                ->label('Activated On')
                 ->color('primary')
                    ->date(),
                TextEntry::make('deactivatedon')
                ->label('Deactivated On')
                 ->color('primary')
                    ->date(),
                
                 TextEntry::make('street')
                ->label('Street')
                 ->color('primary'),

                TextEntry::make('city')
                ->label('City')
                 ->color('primary'),

                TextEntry::make('state')
                ->label('State')
                 ->color('primary'),

                TextEntry::make('country')
                ->label('Country')
                 ->color('primary'),


                TextEntry::make('securityname')
                ->label('Security Name')
                 ->color('primary'),

                TextEntry::make('securitymobile')
                ->label('Security Contact Detail')
                 ->color('primary'),

                TextEntry::make('nooflift')
                ->label('No of Lift')
                 ->color('primary'),

                
                TextEntry::make('created_at')
                    ->color('primary')
                    ->dateTime(),
                TextEntry::make('updated_at')
                ->color('primary')
                    ->dateTime(),
                ])->columns(4),
                

            RepeatableEntry::make('unit')
            ->schema([
                TextEntry::make('name')
                ->label('Unit name')
                 ->color('primary'),

                TextEntry::make('sqt')
                ->label('Size (sq ft)')
                 ->color('primary'),

                TextEntry::make('status')
                ->label('Status')
                 ->color('primary'),

                TextEntry::make('layout.name')
                ->label('Selected Layout Name')
                 ->color('primary')

                    
            ])
            ->columnSpanFull()
            ->columns(4)
            ]);

            
    }
}
