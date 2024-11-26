<?php

namespace App\Filament\Resources\UsersResource\Pages;

use Filament\Actions;
use App\Filament\Resources\UsersResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UsersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}