<?php

namespace App\Filament\Resources\Transcations\Tables;

use App\Models\Ledger;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class TranscationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contractdate')
                    ->searchable(isIndividual: true)
                    ->label('Date')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('ledger.name')
                    ->label('Customer')
                    ->searchable(isIndividual: true)
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('name')
                    ->searchable(isIndividual: true)
                    ->label('Tran Number')
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('unit.name')
                    ->searchable(isIndividual: true)
                    ->label('Unit')
                    ->toggleable(isToggledHiddenByDefault: false),

                 TextColumn::make('unit.building.name')
                    ->searchable(isIndividual: true)
                    ->label('Building')
                    ->toggleable(isToggledHiddenByDefault: false),



                TextColumn::make('reference')
                    ->label('Reference')
                    ->toggleable(isToggledHiddenByDefault: true),

                


                // TextColumn::make('ledger.name')
                //     ->numeric()
                //     ->sortable()
                //     ->label('Agent name')
                //     ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('leasemonths')
                    ->numeric()
                    ->sortable()
                    ->label('Lease Months')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('freemonths')
                    ->numeric()
                    ->sortable()
                    ->label('Free  Months')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('startdate')
                    ->date()
                    ->sortable()
                    ->label('Start Date')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('expdate')
                    ->date()
                    ->sortable()
                    ->label('Exp Date')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('enddate')
                    ->date()
                    ->sortable()
                    ->label('End Date')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('rentpermonthamt')
                    ->numeric()
                    ->sortable()
                    ->label('Rent per months amount')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('totalrentamt')
                    ->numeric()
                    ->sortable()
                    ->label('Total rent amount')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('depositamt')
                    ->numeric()
                    ->sortable()
                    ->label('Deposit amount')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('bankcharge')
                    ->numeric()
                    ->sortable()
                    ->label('Bank Charges')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('installment')
                    ->numeric()
                    ->sortable()
                    ->label('Installment')
                    ->toggleable(isToggledHiddenByDefault: false),

                IconColumn::make('salespost')
                    ->boolean()
                    ->label('Sales Post')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('receiptpost')
                    ->boolean()
                    ->label('Receipt Post')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('refundrentamt')
                    ->numeric()
                    ->sortable()
                    ->label('Refund rent amount')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('refunddepositamt')
                    ->numeric()
                    ->sortable()
                    ->label('Refund deposite amount')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('ptype')
                    ->label('Payment type')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('paydate')
                    ->date()
                    ->sortable()
                    ->label('Payment date')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('pmode')
                    ->label('Payment Mode')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('pymtcollectedby')
                    ->label('Payment collected by')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('Pymtdocnumber')
                    ->label('Payment document number')
                    ->toggleable(isToggledHiddenByDefault: true),

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
                
            //         SelectFilter::make('ledger_id')
            //         ->relationship('ledger', 'name')
            //         ->label('Select Customer name')
            //         ->preload(),    
                    
            //         SelectFilter::make('unit_id')
            //         ->relationship('unit', 'name')
            //         ->label('Select Unit name')
            //         ->preload()
            //           ->getOptionLabelFromRecordUsing(
            //         fn (Model $record) => "{$record->name} - " . ($record->building?->name ?? 'No building')
            //     ), 

            //         // SelectFilter::make('unit.building.name')
            //         // ->relationship('building', 'name')
            //         // ->label('Select Unit name')
            //         // ->preload()
            //     //       ->getOptionLabelFromRecordUsing(
            //     //     fn (Model $record) =>  ($record->building?->name ?? 'No building')
            //     // ), 

                

                   
                  

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
