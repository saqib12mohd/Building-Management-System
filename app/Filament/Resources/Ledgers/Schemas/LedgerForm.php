<?php

namespace App\Filament\Resources\Ledgers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Random\Engine\Secure;

use function Laravel\Prompts\textarea;

class LedgerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Enter Your Ledger Details')
                ->description('Customize Your Ledger Details as You Wish')
                ->columnSpanFull()
                ->collapsible()
                ->schema([

                TextInput::make('name')
                    ->label('Ledger Name')
                    ->required(),

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->tel()
                    ->rules(['digits:10']),


                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('occupation')
                    ->label('Occupation')
                    ->default(null),

                Textarea::make('address')
                    ->label('Address')
                    ->columnSpan(3)
                    ->default(null),
                
                Select::make('group')
                    ->default(null)
                    ->label('Group')
                    ->options([
                        'customer' => 'Customer',
                        'agent' => 'Agent',
                        'owner' => 'Owner',
                    ]),

                DatePicker::make('dob')
                    ->label('Date of Birth')
                    ->default(null),

                TextInput::make('street')
                    ->label('Street')
                    ->default(null),

                TextInput::make('city')
                    ->label('City')
                    ->default(null),
                
                TextInput::make('state')
                    ->label('State')
                    ->default(null),

                TextInput::make('country')
                    ->label('Country')
                    ->default(null),
                
                
                TextInput::make('zip')
                    ->label('Zip Code')
                    ->default(null),
                
                TextInput::make('idname')
                    ->label('ID Name')
                    ->default(null),
                TextInput::make('idno')
                    ->label('ID Number')
                    ->default(null),

                ])->columns(4),
                
            ]);
    }
}
