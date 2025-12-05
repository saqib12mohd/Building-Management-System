<?php

namespace App\Filament\Resources\Ledgers;

use App\Filament\Resources\Ledgers\Pages\CreateLedger;
use App\Filament\Resources\Ledgers\Pages\EditLedger;
use App\Filament\Resources\Ledgers\Pages\ListLedgers;
use App\Filament\Resources\Ledgers\Pages\ViewLedger;
use App\Filament\Resources\Ledgers\Schemas\LedgerForm;
use App\Filament\Resources\Ledgers\Schemas\LedgerInfolist;
use App\Filament\Resources\Ledgers\Tables\LedgersTable;
use App\Models\Ledger;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class LedgerResource extends Resource
{
    protected static ?string $model = Ledger::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;

    protected static ?string $recordTitleAttribute = 'ledger';

    protected static ?string $navigationLabel = 'Ledger';

    protected static string | UnitEnum | null $navigationGroup = 'Masters';

    public static function form(Schema $schema): Schema
    {
        return LedgerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LedgerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LedgersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLedgers::route('/'),
            'create' => CreateLedger::route('/create'),
            'view' => ViewLedger::route('/{record}'),
            'edit' => EditLedger::route('/{record}/edit'),
        ];
    }
}
