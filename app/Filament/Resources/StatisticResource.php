<?php

namespace App\Filament\Resources;

use App\Models\Statistic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StatisticResource extends Resource
{
    protected static ?string $model = Statistic::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Statistic Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('value')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('prefix')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('suffix')
                            ->maxLength(50),
                        Forms\Components\Select::make('icon')
                            ->options([
                                'briefcase' => 'Briefcase',
                                'users' => 'Users',
                                'globe' => 'Globe',
                                'academic-cap' => 'Academic Cap',
                                'document-text' => 'Document Text',
                                'scale' => 'Scale',
                                'heart' => 'Heart',
                                'star' => 'Star',
                                'chart-bar' => 'Chart Bar',
                                'check' => 'Check',
                            ])
                            ->searchable(),
                        Forms\Components\TextInput::make('sort_order')
                            ->integer()
                            ->default(0),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('value')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prefix')
                    ->badge(),
                Tables\Columns\TextColumn::make('suffix')
                    ->badge(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
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
            ->defaultSort('sort_order');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count() ?: null;
    }
}
