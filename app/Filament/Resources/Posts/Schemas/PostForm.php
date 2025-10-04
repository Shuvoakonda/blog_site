<?php
namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs as ComponentsTabs;
use Filament\Schemas\Components\Tabs\Tab as TabsTab;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(\Filament\Schemas\Schema $schema): \Filament\Schemas\Schema
    {
        return $schema->components([
            ComponentsTabs::make('Post Tabs')
                ->tabs([

                    TabsTab::make('Basic Info')
                        ->schema([
                            TextInput::make('title')
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                ->required(),

                            TextInput::make('slug')
                                ->required(),
                            Textarea::make('short_description'),
                            Textarea::make('description')->columnSpanFull(),
                            Textarea::make('excerpt')->columnSpanFull(),
                            Textarea::make('content')
                                ->required()
                                ->columnSpanFull(),

                            Hidden::make('author')
                                ->default(auth()->user()->name)
                                ->disabled(),

                            Hidden::make('user_id')
                                ->default(auth()->id()),
                        ])
                        ->columns(2),

                    TabsTab::make('Media')
                        ->schema([
                            FileUpload::make('image')->image(),
                            FileUpload::make('gallery')->multiple(),
                        ])
                        ->columns(2),

                    TabsTab::make('Settings')
                        ->schema([
                            Select::make('post_category_id')
                                ->label('Category')
                                ->relationship('category', 'name')
                                ->required(),

                            Select::make('status')
                                ->options([
                                    'draft'     => 'Draft',
                                    'published' => 'Published',
                                    'archived'  => 'Archived',
                                ])
                                ->default('draft')
                                ->required(),

                            Toggle::make('is_featured'),
                            Toggle::make('allow_comments'),
                            DateTimePicker::make('published_at'),
                        ])
                        ->columns(2),

                    TabsTab::make('SEO')
                        ->schema([
                            TextInput::make('meta_title'),
                            Textarea::make('meta_description')->columnSpanFull(),
                            TextInput::make('meta_keywords'),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }
}
