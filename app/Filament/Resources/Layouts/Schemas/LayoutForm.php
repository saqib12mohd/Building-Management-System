<?php

namespace App\Filament\Resources\Layouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class LayoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Layout')
                ->description('Customize Your Layout Details as You Prefer')
                ->columnSpanFull()
                ->collapsible()
                ->schema([

                     TextInput::make('name')
                        ->label('Layout name'),

                     Select::make('building_id')
                    ->required()
                    ->label('Select Building Name')
                    ->relationship('building','name'),

                    // Select::make('type')
                    //     ->label('Select Building Type')
                    //     ->options([
                    //         'room'        => 'Room',
                    //         'bedroom'     => 'Bedroom',
                    //         'living_room' => 'Living Room',
                    //         'hall'        => 'Hall',
                    //         'meeting'     => 'Meeting Room',
                    //         'office'      => 'Office',
                    //         'dining'      => 'Dining Hall',
                    //         'kitchen'     => 'Kitchen',
                    //         'bathroom'    => 'Bathroom',
                    //         'balcony'     => 'Balcony',
                    //         'storeroom'   => 'Store Room',
                    //         'basement'    => 'Basement',
                    //         'terrace'     => 'Terrace',
                    //         'garden'      => 'Garden',
                    //         'garage'      => 'Garage / Parking',
                    //         'reception'   => 'Reception',
                    //         'corridor'    => 'Corridor',
                    //         'staircase'   => 'Staircase',
                    //         'laundry'     => 'Laundry Room',
                    //         'gym'         => 'Gym / Fitness Room',
                    //         'conference'  => 'Conference Hall',
                    //         'prayer'      => 'Prayer Room',
                    //         'guest'       => 'Guest Room',
                    //         'security'    => 'Security Cabin',
                            
                    //     ])
                    //     ->required(),

                    TextInput::make('view')
                    ->label('View')
                    ->default(null),

                    FileUpload::make('floorplan')
                    ->label('Floor Plan')
                    ->default(null),

                    // Toggle::make('attached')
                    // ->label('It has Attach bathroom?')
                    //  ->onColor('success')
                    // ->offColor('danger')
                    // ->onIcon('heroicon-o-check')
                    // ->offIcon('heroicon-o-x-mark')
                    // ->default(null),

                  TextInput::make('sqt')
                    ->label('Total Size (sq ft)')
                    ->readOnly()
                    ->dehydrated()
                    // ->live()
                    // ->dehydrateStateUsing(function (Get $get) {

                    //     $rows = $get('utypejson') ?? [];

                    //     return collect($rows)
                    //         ->pluck('sqt')
                    //         ->map(fn ($v) => (float) $v)
                    //         ->sum();
                    // }),



                    

                ])->columns(4),

                Repeater::make('utypejson')
                ->columnSpanFull()
                ->default([])  
                    ->afterStateUpdated(function (Set $set, Get $get) {

                    $rows = $get('utypejson') ?? [];

                    $total = collect($rows)
                        ->pluck('sqt')
                        ->map(fn ($v) => (float) $v)
                        ->sum();

                    $set('sqt', $total);
                    })
                ->columns(2)
                    ->table([
                         TableColumn::make('Size (sq ft)'),
                        TableColumn::make(' Building Type'),
                        TableColumn::make('It has Attach bathroom?'),

                    ])
                    ->schema([

                        TextInput::make('sqt')
                            ->numeric()
                            ->debounce(500),


                         Select::make('type')
                        ->label('Select Building Type')
                        ->options([
                            'room'        => 'Room',
                            'bedroom'     => 'Bedroom',
                            'living_room' => 'Living Room',
                            'hall'        => 'Hall',
                            'meeting'     => 'Meeting Room',
                            'office'      => 'Office',
                            'dining'      => 'Dining Hall',
                            'kitchen'     => 'Kitchen',
                            'bathroom'    => 'Bathroom',
                            'balcony'     => 'Balcony',
                            'storeroom'   => 'Store Room',
                            'basement'    => 'Basement',
                            'terrace'     => 'Terrace',
                            'garden'      => 'Garden',
                            'garage'      => 'Garage / Parking',
                            'reception'   => 'Reception',
                            'corridor'    => 'Corridor',
                            'staircase'   => 'Staircase',
                            'laundry'     => 'Laundry Room',
                            'gym'         => 'Gym / Fitness Room',
                            'conference'  => 'Conference Hall',
                            'prayer'      => 'Prayer Room',
                            'guest'       => 'Guest Room',
                            'security'    => 'Security Cabin',
                            
                        ]),

                    Toggle::make('attached')
                    ->inline(false)
                    ->label('It has Attach bathroom?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-o-check')
                    ->offIcon('heroicon-o-x-mark')
                    ->default(null),
                    
                
                            
                    ])
                    ->columns(2)

                    
                
               
            ]);
    }
}
