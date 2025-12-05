<?php

namespace App\Filament\Resources\Transcations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TranscationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                ->columnSpanFull()
                ->schema([

                    TextEntry::make('name')
                ->label('Transcation name')
                 ->color('primary'),

                TextEntry::make('unit.name')
                ->label('Unit')
                 ->color('primary'),

                TextEntry::make('reference')
                ->label('Reference')
                 ->color('primary'),

                TextEntry::make('ledger.name')
                    ->label('Ledger name')
                 ->color('primary'),

                TextEntry::make('agent_id')
                    ->label('ledger.name')
                 ->color('primary'),

                TextEntry::make('leasemonths')
                    ->numeric()
                    ->label('Lease Months')
                 ->color('primary'),

                TextEntry::make('freemonths')
                    ->numeric()
                    ->label('Free Months')
                 ->color('primary'),

                TextEntry::make('startdate')
                    ->date()
                    ->label('Start Date')
                 ->color('primary'),

                TextEntry::make('expdate')
                    ->date()
                    ->label('Exp Date')
                 ->color('primary'),

                TextEntry::make('enddate')
                    ->date()
                    ->label('End Date')
                 ->color('primary'),

                TextEntry::make('rentpermonthamt')
                    ->numeric()
                    ->label('Rent per month amount')
                 ->color('primary'),

                TextEntry::make('totalrentamt')
                    ->numeric()
                    ->label('Total rent amount')
                 ->color('primary'),

                TextEntry::make('depositamt')
                    ->numeric()
                    ->label('Deposit amount')
                 ->color('primary'),

                TextEntry::make('bankcharge')
                    ->numeric()
                    ->label('Bank Charges')
                 ->color('primary'),

                TextEntry::make('installment')
                    ->numeric()
                    ->label('Installment')
                    ->color('primary'),

                IconEntry::make('salespost')
                    ->boolean()
                    ->label('Sales Post'),

                IconEntry::make('receiptpost')
                    ->boolean()
                    ->label('Receipt Post'),

                TextEntry::make('refundrentamt')
                    ->numeric()
                    ->label('Refund rent amount')
                 ->color('primary'),
                 
                TextEntry::make('refunddepositamt')
                    ->numeric()
                    ->label('Refund deposit amount')
                 ->color('primary'),

                TextEntry::make('ptype')
                ->label('Payment type')
                 ->color('primary'),

                TextEntry::make('paydate')
                    ->date()->label('Payment Date')
                 ->color('primary'),

                TextEntry::make('pmode')
                ->label('Payment Mode')
                 ->color('primary'),

                TextEntry::make('pymtcollectedby')
                ->label('Payment Collected by')
                 ->color('primary'),

                TextEntry::make('Pymtdocnumber')
                ->label('Payment document number')
                 ->color('primary'),

                TextEntry::make('created_at')
                 ->color('primary')
                    ->dateTime(),

                TextEntry::make('updated_at')
                 ->color('primary')
                    ->dateTime(),
                ])
                ->columns(4),
                

            RepeatableEntry::make('payment')
            ->schema([
                TextEntry::make('date')
                ->label('Date')
                 ->color('primary'),

                TextEntry::make('referencenum')
                ->label('Reference Number')
                 ->color('primary'),

                TextEntry::make('paymentmode')
                ->label('Payment Mode')
                 ->color('primary'),

                TextEntry::make('bankname')
                ->label('Bank Name')
                 ->color('primary'),

                TextEntry::make('depositdate')
                ->label('Deposite Date')
                 ->color('primary'),

                TextEntry::make('note')
                ->label('Notes')
                 ->color('primary'),

                TextEntry::make('amount')
                ->label('Amount')
                 ->color('primary')

                    
            ])
            ->columnSpan(2)
            ->columns(3)
            ]);
    }
}
