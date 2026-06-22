<?php

namespace App\Filament\Resources;

use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $recordTitleAttribute = 'client_name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Client Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('client_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_position')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_company')
                            ->maxLength(255),
                        Forms\Components\Select::make('rating')
                            ->options([
                                1 => '1 Star',
                                2 => '2 Stars',
                                3 => '3 Stars',
                                4 => '4 Stars',
                                5 => '5 Stars',
                            ])
                            ->default(5)
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ]),
                Forms\Components\Section::make('Testimonial')
                    ->schema([
                        Forms\Components\Textarea::make('content')
                            ->required()
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Photo')
                    ->schema([
                        Forms\Components\FileUpload::make('client_photo')
                            ->image()
                            ->directory('testimonials')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('client_photo')
                    ->circular(),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('client_company')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->badge()
                    ->color(fn (int $state): string => match ($state) {
                        5 => 'success',
                        4 => 'info',
                        3 => 'warning',
                        default => 'danger',
                    }),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
                Tables\Filters\SelectFilter::make('rating')
                    ->options([
                        1 => '1 Star',
                        2 => '2 Stars',
                        3 => '3 Stars',
                        4 => '4 Stars',
                        5 => '5 Stars',
                    ]),
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
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count() ?: null;
    }
}
