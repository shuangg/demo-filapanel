<?php

namespace App\Filament\Admin\Resources\CustomerAddressResource\Pages;

use App\Filament\Admin\Resources\CustomerAddressResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerAddress extends CreateRecord
{
    protected static string $resource = CustomerAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
