<?php

namespace App\Filament\Resources\Buildings\Schemas;

use App\Models\Layout;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class BuildingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Enter Building Details')
                ->description('Enter Your Building Details has your wish!!')
                ->collapsible()
                ->schema([
                    
                TextInput::make('name')
                    ->label('Building Name')
                    ->required(),

                Select::make('btype')
                ->default(null)
                ->label('Select Your Building Type')
                ->options([
                    'residential' => 'Residential',
                    'commercial' => 'Commercial',
                    'both' => 'Both',
                ]),

                DatePicker::make('activatedon')
                ->label('Activated On'),

                DatePicker::make('deactivatedon')
                ->label('Deactivated On'),

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
                TextInput::make('securityname')
                    ->label('Security Name')
                    ->default(null),
                TextInput::make('securitymobile')
                    ->label('Security Contact Number')
                    ->default(null),

                TextInput::make('nooflift')
                    ->label('Number of lift Avaiable')
                    ->default(null),
                

                ])->columnSpanFull()
                ->columns(4),

            
                Repeater::make('unit')
                ->relationship()
                ->columnSpanFull()
                ->label('Enter building Units!!')
                    ->table([

                        TableColumn::make('Unit Name'),
                        TableColumn::make('Select Layout'),
                        TableColumn::make('Size (sq ft)'),
                        TableColumn::make('Status'),

                    ])
                    ->schema([

                    TextInput::make('name')
                        ->label('Unit name'),

                   Select::make('layout_id')
                        ->label('Select Layout')
                        ->relationship('layout', 'name')
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set) {
                            $layout = Layout::find($state);
                            $set('sqt', $layout?->sqt ?? null);
                        }),

                    TextInput::make('sqt')
                        ->numeric()
                        ->label('Size (sq ft)'),
                      
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            1 => 'Available',
                            2 => 'Occupied',
                            3 => 'Under Maintenance',
                            4 => 'Reserved',
                        ])
                        ->required()
                        ->native(false),



    ])
                    ->columns(4)
               
            ]);
    }
}
