<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Enter User details')
                ->collapsible()
                ->columnSpanFull()
                ->schema([

                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('role')
                ->options([
                    'admin'        => 'Admin',
                    'manager'      => 'Manager',
                    'supervisor'   => 'Supervisor',
                    'security'     => 'Security',
                ])
                ->default('null'),


                ])->columns(2),
                
            ]);
    }
}
