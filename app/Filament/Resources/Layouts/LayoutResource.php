<?php

namespace App\Filament\Resources\Layouts;

use App\Filament\Resources\Layouts\Pages\CreateLayout;
use App\Filament\Resources\Layouts\Pages\EditLayout;
use App\Filament\Resources\Layouts\Pages\ListLayouts;
use App\Filament\Resources\Layouts\Pages\ViewLayout;
use App\Filament\Resources\Layouts\Schemas\LayoutForm;
use App\Filament\Resources\Layouts\Schemas\LayoutInfolist;
use App\Filament\Resources\Layouts\Tables\LayoutsTable;
use App\Models\Layout;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class LayoutResource extends Resource
{
    protected static ?string $model = Layout::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSwatch;

    protected static ?string $recordTitleAttribute = 'layout';

    protected static ?string $navigationLabel = 'Layout';

    protected static string | UnitEnum | null $navigationGroup = 'Masters';

    public static function form(Schema $schema): Schema
    {
        return LayoutForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LayoutInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LayoutsTable::configure($table);
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
            'index' => ListLayouts::route('/'),
            'create' => CreateLayout::route('/create'),
            'view' => ViewLayout::route('/{record}'),
            'edit' => EditLayout::route('/{record}/edit'),
        ];
    }
}
