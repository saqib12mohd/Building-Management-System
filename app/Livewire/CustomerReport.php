<?php

namespace App\Livewire;

use App\Models\Ledger;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;


class CustomerReport extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Ledger::query())
            ->columns([
                 TextColumn::make('name')
                    ->searchable()
                    ->label('Customer Name'),

                TextColumn::make('phone')
                    ->searchable()
                    ->label('Contact Num'),

                // TextColumn::make('email')
                //     ->label('Email Address')
                //     ->searchable(),

                TextColumn::make('address')
                    ->searchable()
                    ->wrap()
                    ->label('Address'),

                TextColumn::make('occupation')
                    ->searchable()
                    ->label('Occupation'),

                TextColumn::make('group')
                    ->searchable()
                    ->label('Group'),

                // TextColumn::make('dob')
                //     ->searchable()
                //     ->label('Date of Birth'),

                // TextColumn::make('country')
                //     ->searchable()
                //     ->label('Country'),

                // TextColumn::make('city')
                //     ->searchable()
                //     ->label('City'),

                // TextColumn::make('state')
                //     ->searchable()
                //     ->label('State'),

                // TextColumn::make('zip')
                //     ->searchable()
                //     ->label('Zip Code'),

                // TextColumn::make('street')
                //     ->searchable()
                //     ->label('Street'),

                TextColumn::make('idname')
                    ->searchable()
                    ->label('ID Name'),

                TextColumn::make('idno')
                    ->searchable()
                    ->label('ID Number'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
