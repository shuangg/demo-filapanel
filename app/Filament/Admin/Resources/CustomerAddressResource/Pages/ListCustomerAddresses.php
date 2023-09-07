<?php

namespace App\Filament\Admin\Resources\CustomerAddressResource\Pages;

use App\Filament\Admin\Resources\CustomerAddressResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerAddresses extends ListRecords
{
    protected static string $resource = CustomerAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
