<?php

namespace App\Filament\Resources\Transcations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class TranscationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Lease Contract')
                ->collapsible()
                ->description('Enter Lease Contract details.')
                ->columnSpanFull()
                ->schema([

                DatePicker::make('contractdate')
                ->label('Contract Date')
                ->default(now()),

                TextInput::make('name')
                    ->label('Number')
                    ->numeric()
                    ->required(),

                Select::make('unit_id')
                ->label('Select Unit name')
                
                ->relationship('unit', 'name')
                ->getOptionLabelFromRecordUsing(
                    fn (Model $record) => "{$record->name} - " . ($record->building?->name ?? 'No building')
                )
                ->required(),


                TextInput::make('reference')
                    ->label('Reference')
                    ->default(null),

                Select::make('ledger_id')
                    ->label('Select Ledger Name')
                    ->relationship('ledger','name')
                    ->required(),

                Select::make('agent_id')
                ->label('Select Agent')
                    ->required()
                    ->relationship('ledger','name'),


                
                ])->columns(4),

                Section::make('Lease Information')
                ->collapsible()
                ->description('Enter Lease Information details.')
                ->columnSpanFull()
                ->schema([

                TextInput::make('leasemonths')
                    ->label('Lease Months')
                    ->numeric()
                    ->default(null),

                TextInput::make('freemonths')
                    ->numeric()
                    ->label('Free Months')
                    ->default(null),

                DatePicker::make('startdate')
                ->label('Start Date'),

                DatePicker::make('expdate')
                ->label('Exp Date')
                ->afterOrEqual('startdate'),

                TextInput::make('rentpermonthamt')
                    ->numeric()
                    ->label('Rent per month amount')
                    ->default(null),

                TextInput::make('totalrentamt')
                    ->numeric()
                    ->label('Total rent amount')
                    ->default(null),

                TextInput::make('depositamt')
                    ->numeric()
                    ->label('Deposit amount')
                    ->default(null),

                TextInput::make('ptype')
                    ->label('Payment type')
                    ->default(null),

                TextInput::make('bankcharge')
                    ->numeric()
                    ->label('Bank Charges')
                    ->default(null),

                // TextInput::make('installment')
                //     ->numeric()
                //     ->label('Installment')
                //     ->default(null),

                TextInput::make('installment')
                    ->numeric()
                    ->label('Installment')
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, $get) {

                        $current = $get('payment') ?? [];

                        // Shrink if smaller
                        if ($state < count($current)) {
                            $set('payment', array_slice($current, 0, $state));
                            return;
                        }

                        // Expand if bigger
                        for ($i = count($current); $i < $state; $i++) {
                            $current[] = [
                                'date' => null,
                                'referencenum' => null,
                                'paymentmode' => null,
                                'bankname' => null,
                                'depositdate' => null,
                                'note' => null,
                                'amount' => null,
                            ];
                        }

                        $set('payment', $current);
                    }),


                Toggle::make('salespost')
                ->inline(false)
                ->label('Sales Post')
                ->onColor('success')
                ->offColor('danger')
                ->onIcon('heroicon-o-check')
                ->offIcon('heroicon-o-x-mark'),

                Toggle::make('receiptpost')
                ->inline(false)
                ->label('Receipt Post')
                ->onColor('success')
                ->offColor('danger')
                ->onIcon('heroicon-o-check')
                ->offIcon('heroicon-o-x-mark'),

                ])->columns(4),

                 Section::make('Contract Closing Information')
                ->collapsible()
                ->description('Enter Contract Closing Information details.')
                ->columnSpanFull()
                ->schema([
                DatePicker::make('enddate')
                ->label('End Date')
                ->afterOrEqual('startdate'),
                
                TextInput::make('refundrentamt')
                    ->numeric()
                    ->label('Refund rent amount')
                    ->default(null),
                TextInput::make('refunddepositamt')
                    ->numeric()
                    ->label('Refund deposit amount')
                    ->default(null),
                
                DatePicker::make('paydate')
                ->label('Payment Date'),

                TextInput::make('pmode')
                    ->label('Payment Mode')
                    ->default(null),
                TextInput::make('pymtcollectedby')
                    ->label('Payment collected by')
                    ->default(null),
                TextInput::make('Pymtdocnumber')
                    ->label('Payment Document Number')
                    ->default(null),
                FileUpload::make('attachment')
                    ->label('Attachment')
                    ->default(null)
                    ->columnSpanFull(),
                    
                ])->columns(4),

                Repeater::make('payment')
                ->relationship()
                ->columnSpanFull()
                ->label('Enter Payment Details')
                ->table([
                    TableColumn::make('Due Date')
                    ->width('30px'),
                    
                    TableColumn::make('Reference')
                    ->width('30px'),
                    TableColumn::make('Payment Mode')
                    ->width('30px'),
                    TableColumn::make('Deposited Bank')
                    ->width('30px'),
                    TableColumn::make('Deposited On')
                    ->width('30px'),
                    TableColumn::make('Description')
                    ->width('30px'),
                    
                    TableColumn::make('Amount')
                    ->width('30px'),
                    // TableColumn::make('Attachment')
                    // ->width('30px'),
                  

                    
                ])
                ->schema([
                
                DatePicker::make('date')
                    ->required(),
                
                TextInput::make('referencenum')
                    ->default(null),
                 TextInput::make('paymentmode')
                    ->default(null),
                TextInput::make('bankname')
                    ->default(null),
                DatePicker::make('depositdate'),
                TextInput::make('note')
                    ->default(null)
                    ->columnSpanFull(),
               
                TextInput::make('amount')
                    ->numeric()
                    ->default(null),
                // FileUpload::make('attachment')
                //     ->default(null),
              

                  

                    ])->columns(4)

                    
                    
                
                
            ]);

         
    }
}
