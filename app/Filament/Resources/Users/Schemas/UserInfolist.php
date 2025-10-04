<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('role_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('avatar'),
                TextEntry::make('phone'),
                TextEntry::make('address'),
                TextEntry::make('city'),
                TextEntry::make('state'),
                TextEntry::make('zip'),
                TextEntry::make('country'),
                TextEntry::make('email_verified_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('display_name'),
            ]);
    }
}
