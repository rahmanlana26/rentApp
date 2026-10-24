<?php

namespace App\Filament\Resources\Catalogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CatalogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_produk')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->directory('catalogs'),
                TextInput::make('harga_mulai')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
