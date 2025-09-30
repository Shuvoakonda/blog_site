<?php
namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               
                TextColumn::make('title')
                    ->description(fn($record) => Str::limit($record->short_description, 40))
                    ->icon('heroicon-o-document-text')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

             
                TextColumn::make('author')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->sortable(),

          
                ImageColumn::make('image')
                    ->circular()
                    ->label('Thumbnail'),

      
                ImageColumn::make('gallery')
                    ->circular()
                    ->limit(3)
                    ->stacked()
                    ->label('Gallery'),

           
                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->badge()
                    ->color('gray'),

      
                TextColumn::make('meta_title')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('meta_keywords')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

            
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'danger'  => 'draft',
                        'success' => 'published',
                        'warning' => 'archived',
                    ])
                    ->sortable(),

           
                IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Featured'),

                IconColumn::make('allow_comments')
                    ->boolean()
                    ->label('Comments'),

        
                TextColumn::make('published_at')
                    ->date('M d, Y')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
              
            ])
            ->recordActions([
                ViewAction::make()->icon('heroicon-o-eye')->color('info'),
                EditAction::make()->icon('heroicon-o-pencil')->color('warning'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
