<?php

namespace App\Filament\Resources\OrderProgress\Pages;

use App\Filament\Resources\OrderProgress\OrderProgressResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrderProgress extends ListRecords
{
    protected static string $resource = OrderProgressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
