<?php

namespace App\Filament\Resources\OrderProgress\Pages;

use App\Filament\Resources\OrderProgress\OrderProgressResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOrderProgress extends EditRecord
{
    protected static string $resource = OrderProgressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
