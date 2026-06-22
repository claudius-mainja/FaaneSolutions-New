<?php

namespace App\Filament\Resources;

use App\Models\JobListing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class JobListingResource extends Resource
{
    protected static ?string $model = JobListing::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Recruitment';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Job Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Forms\Components\Select::make('type')
                            ->options([
                                'full-time' => 'Full Time',
                                'part-time' => 'Part Time',
                                'contract' => 'Contract',
                                'temporary' => 'Temporary',
                                'internship' => 'Internship',
                                'remote' => 'Remote',
                            ])
                            ->required(),
                        Forms\Components\Select::make('department')
                            ->options([
                                'information-technology' => 'Information Technology',
                                'healthcare' => 'Healthcare',
                                'engineering' => 'Engineering',
                                'finance' => 'Finance',
                                'education' => 'Education',
                                'hospitality' => 'Hospitality',
                                'construction' => 'Construction',
                                'sales' => 'Sales & Marketing',
                                'human-resources' => 'Human Resources',
                                'other' => 'Other',
                            ])
                            ->searchable(),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('salary_range')
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('closing_date'),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ]),
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('summary')
                            ->maxLength(500)
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('description')
                            ->fileAttachmentsDirectory('jobs')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Requirements')
                    ->schema([
                        Forms\Components\Repeater::make('requirements')
                            ->schema([
                                Forms\Components\TextInput::make('requirement')->required(),
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Responsibilities')
                    ->schema([
                        Forms\Components\Repeater::make('responsibilities')
                            ->schema([
                                Forms\Components\TextInput::make('responsibility')->required(),
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'full-time' => 'success',
                        'part-time' => 'info',
                        'contract' => 'warning',
                        'temporary' => 'gray',
                        'internship' => 'primary',
                        'remote' => 'primary',
                    }),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
                    ->searchable(),
                Tables\Columns\TextColumn::make('closing_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'full-time' => 'Full Time',
                        'part-time' => 'Part Time',
                        'contract' => 'Contract',
                        'temporary' => 'Temporary',
                        'internship' => 'Internship',
                        'remote' => 'Remote',
                    ]),
                Tables\Filters\SelectFilter::make('department')
                    ->options([
                        'information-technology' => 'Information Technology',
                        'healthcare' => 'Healthcare',
                        'engineering' => 'Engineering',
                        'finance' => 'Finance',
                        'education' => 'Education',
                        'hospitality' => 'Hospitality',
                        'construction' => 'Construction',
                        'sales' => 'Sales & Marketing',
                        'human-resources' => 'Human Resources',
                        'other' => 'Other',
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
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count() ?: null;
    }
}
