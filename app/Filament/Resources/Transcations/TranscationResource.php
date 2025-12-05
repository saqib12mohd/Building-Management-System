<?php

namespace App\Filament\Resources\Transcations;

use App\Filament\Resources\Transcations\Pages\CreateTranscation;
use App\Filament\Resources\Transcations\Pages\EditTranscation;
use App\Filament\Resources\Transcations\Pages\ListTranscations;
use App\Filament\Resources\Transcations\Pages\ViewTranscation;
use App\Filament\Resources\Transcations\Schemas\TranscationForm;
use App\Filament\Resources\Transcations\Schemas\TranscationInfolist;
use App\Filament\Resources\Transcations\Tables\TranscationsTable;
use App\Models\Transcation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TranscationResource extends Resource
{
    protected static ?string $model = Transcation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentCurrencyDollar;

    protected static ?string $recordTitleAttribute = 'Transcation';

    protected static ?string $navigationLabel = 'Transcation';

    protected static string | UnitEnum | null $navigationGroup = 'Transcation';

    public static function form(Schema $schema): Schema
    {
        return TranscationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TranscationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TranscationsTable::configure($table);
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
            'index' => ListTranscations::route('/'),
            'create' => CreateTranscation::route('/create'),
            'view' => ViewTranscation::route('/{record}'),
            'edit' => EditTranscation::route('/{record}/edit'),
        ];
    }
}
