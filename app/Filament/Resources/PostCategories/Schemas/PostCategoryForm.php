<?php
namespace App\Filament\Resources\PostCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs as ComponentsTabs;
use Filament\Schemas\Components\Tabs\Tab as TabsTab;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            ComponentsTabs::make('Post Category Form')
                ->tabs([
                    TabsTab::make('General')
                        ->schema([
                            TextInput::make('name')
                                ->label('Category Name')
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                ->required()
                                ->maxLength(255),

                            TextInput::make('slug')
                                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                ->required()
                                ->maxLength(255),

                            Textarea::make('description')
                                ->rows(4)
                                ->columnSpanFull(),

                            FileUpload::make('image')
                                ->label('Category Image')
                                ->image()
                                ->directory('post-categories')
                                ->imageEditor(),
                        ])
                        ->columns(2),

                    TabsTab::make('SEO')
                        ->schema([
                            TextInput::make('meta_title')
                                ->maxLength(255),

                            Textarea::make('meta_description')
                                ->rows(3)
                                ->columnSpanFull(),

                            TextInput::make('meta_keywords')
                                ->maxLength(255),
                        ]),

                    TabsTab::make('Settings')
                        ->schema([
                            Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),

                            TextInput::make('sort_order')
                                ->numeric()
                                ->default(0),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }
}
