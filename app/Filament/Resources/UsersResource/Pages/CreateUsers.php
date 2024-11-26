<?php

namespace App\Filament\Resources\UsersResource\Pages;

use Filament\Actions;
use App\Filament\Resources\UsersResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUsers extends CreateRecord
{
    protected static string $resource = UsersResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}