<?php

namespace App\Filament\Admin\Resources\ProductReviewResource\Pages;

use App\Filament\Admin\Resources\ProductReviewResource;
use Filament\Resources\Pages\EditRecord;

class EditProductReview extends EditRecord
{
    protected static string $resource = ProductReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
