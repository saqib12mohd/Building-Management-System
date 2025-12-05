<?php

namespace App\Filament\Resources\Ledgers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LedgerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make()
                ->columnSpanFull()
                ->schema([

                    
                TextEntry::make('name')
                ->label('Ledger name')
                 ->color('primary'),

                TextEntry::make('phone')
                ->label('Phone Number')
                 ->color('primary'),

                TextEntry::make('email')
                ->label('Email Address')
                 ->color('primary'),

                TextEntry::make('occupation')
                ->label('Occupation')
                 ->color('primary'),

                 TextEntry::make('address')
                ->label('Address')
                 ->color('primary'),

                TextEntry::make('group')
                ->label('Group')
                 ->color('primary'),

                TextEntry::make('dob')
                ->label('Date of birth')
                 ->color('primary'),

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

                TextEntry::make('zip')
                ->label('Zip Code')
                 ->color('primary'),

            
                TextEntry::make('idname')
                ->label('ID Name')
                 ->color('primary'),

                TextEntry::make('idno')
                ->label('ID Number')
                 ->color('primary'),

                TextEntry::make('created_at')
                ->color('primary')
                    ->dateTime(),

                TextEntry::make('updated_at')
                ->color('primary')
                    ->dateTime(),

                ])->columns(4),

            ]);
    }
}
