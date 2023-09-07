<?php

namespace App\Filament\Admin\Resources\OrderItemResource\Pages;

use App\Filament\Admin\Resources\OrderItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderItem extends CreateRecord
{
    protected static string $resource = OrderItemResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
