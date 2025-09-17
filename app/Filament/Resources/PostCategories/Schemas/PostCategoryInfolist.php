<?php
namespace App\Filament\Resources\PostCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('slug'),
                TextEntry::make('description'),
                TextEntry::make('image'),
                TextEntry::make('meta_title'),
                TextEntry::make('meta_description'),
                TextEntry::make('meta_keywords'),
                TextEntry::make('is_active'),
                TextEntry::make('sort_order'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
