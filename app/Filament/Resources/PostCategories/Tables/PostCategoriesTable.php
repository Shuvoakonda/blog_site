<?php
namespace App\Filament\Resources\PostCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PostCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
             
                TextColumn::make('name')
                    ->icon('heroicon-o-tag')
                    ->description(fn($record) => $record->slug)
                    ->searchable()
                    ->sortable(),

               
                ImageColumn::make('image')
                    ->circular()
                    ->label('Thumbnail'),

              
                TextColumn::make('description')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(),

            
                TextColumn::make('meta_title')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('meta_description')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('meta_keywords')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

            
                TextColumn::make('sort_order')
                    ->numeric()
                    ->badge()
                    ->color('gray')
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
             
                SelectFilter::make('is_active')->options([1 => 'Active', 0 => 'Inactive']),
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
