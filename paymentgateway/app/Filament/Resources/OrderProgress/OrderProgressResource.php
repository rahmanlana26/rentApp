<?php

namespace App\Filament\Resources\OrderProgress;

use App\Filament\Resources\OrderProgress\Pages\CreateOrderProgress;
use App\Filament\Resources\OrderProgress\Pages\EditOrderProgress;
use App\Filament\Resources\OrderProgress\Pages\ListOrderProgress;
use App\Filament\Resources\OrderProgress\Schemas\OrderProgressForm;
use App\Filament\Resources\OrderProgress\Tables\OrderProgressTable;
use App\Models\OrderProgress;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrderProgressResource extends Resource
{
    protected static ?string $model = OrderProgress::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return OrderProgressForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrderProgressTable::configure($table);
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
            'index' => ListOrderProgress::route('/'),
            'create' => CreateOrderProgress::route('/create'),
            'edit' => EditOrderProgress::route('/{record}/edit'),
        ];
    }
}
