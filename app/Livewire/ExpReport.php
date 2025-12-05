<?php

namespace App\Livewire;

use App\Models\Transcation;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class ExpReport extends TableWidget
{

    public function table(Table $table): Table
    {
        return $table
           ->query(fn (): Builder =>
                Transcation::query()
                    ->whereNull('enddate')                          
                    ->whereDate('expdate', '<=', Carbon::today())    
            )
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Transcation name'),

                TextColumn::make('unit.name')
                    ->searchable()
                    ->label('Unit'),

                TextColumn::make('ledger.name')
                    ->numeric()
                    ->sortable()
                    ->label('Ledger name'),

                TextColumn::make('startdate')
                    ->date()
                    ->sortable()
                    ->label('Start Date'),

                TextColumn::make('expdate')
                    ->date()
                    ->sortable()
                    ->label('Exp Date'),

                 TextColumn::make('installment')
                    ->numeric()
                    ->sortable()
                    ->label('Installment'),
                
                TextColumn::make('pmode')
                    ->searchable()
                    ->label('Payment Mode'),

                TextColumn::make('pymtcollectedby')
                    ->searchable()
                    ->label('Payment collected by'),

                // TextColumn::make('enddate')
                //     ->date()
                //     ->sortable()
                //     ->label('End Date'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                 
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
