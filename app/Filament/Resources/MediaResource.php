<?php

namespace App\Filament\Resources;

use BackedEnum;

use UnitEnum;

use App\Models\Media;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-photo';

    protected static string|UnitEnum|null $navigationGroup = 'System';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Section::make('File Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('file_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mime_type')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('path')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('disk')
                            ->options([
                                'public' => 'Public',
                                'local' => 'Local',
                                's3' => 'S3',
                            ])
                            ->default('public'),
                        Forms\Components\TextInput::make('size')
                            ->numeric()
                            ->suffix('bytes'),
                        Forms\Components\TextInput::make('collection')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mediable_type')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mediable_id')
                            ->numeric(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mime_type')
                    ->badge(),
                Tables\Columns\TextColumn::make('disk')
                    ->badge(),
                Tables\Columns\TextColumn::make('size')
                    ->formatStateUsing(fn ($state) => $state ? round($state / 1024, 2) . ' KB' : '-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('collection')
                    ->badge(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('disk')
                    ->options([
                        'public' => 'Public',
                        'local' => 'Local',
                        's3' => 'S3',
                    ]),
                Tables\Filters\SelectFilter::make('collection'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\MediaResource\Pages\ListMedia::route('/'),
            'create' => \App\Filament\Resources\MediaResource\Pages\CreateMedia::route('/create'),
            'edit' => \App\Filament\Resources\MediaResource\Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
