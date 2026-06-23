<?php

namespace App\Filament\Resources;

use BackedEnum;

use UnitEnum;

use App\Models\JobListing;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class JobListingResource extends Resource
{
    protected static ?string $model = JobListing::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';

    protected static string|UnitEnum|null $navigationGroup = 'Recruitment';

    protected static ?string $navigationLabel = 'Job Posts';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Section::make('Job Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->placeholder('e.g. Senior Recruitment Consultant'),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Auto-generated from title. Change only if needed.'),
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
                                'Recruitment' => 'Recruitment',
                                'Immigration' => 'Immigration',
                                'HR Strategy' => 'HR Strategy',
                                'Business' => 'Business',
                                'Business Development' => 'Business Development',
                                'Mining' => 'Mining',
                                'Finance' => 'Finance',
                                'Operations' => 'Operations',
                            ])
                            ->searchable()
                            ->placeholder('Select department'),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255)
                            ->placeholder('e.g. Lusaka, Zambia'),
                        Forms\Components\TextInput::make('salary_range')
                            ->maxLength(255)
                            ->placeholder('e.g. Competitive + Commission'),
                        Forms\Components\DatePicker::make('closing_date')
                            ->label('Closing Date')
                            ->helperText('After this date, the job will show as "Expired" on the careers page.'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Only active jobs appear on the public careers page.'),
                    ]),
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('summary')
                            ->label('Short Summary')
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('A brief description shown in job cards on the careers page.'),
                        Forms\Components\RichEditor::make('description')
                            ->label('Full Description')
                            ->fileAttachmentsDirectory('jobs')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline',
                                'heading', 'h2', 'h3',
                                'bulletList', 'orderedList',
                                'link', 'undo', 'redo',
                            ]),
                    ]),
                Forms\Components\Section::make('Requirements')
                    ->schema([
                        Forms\Components\TagsInput::make('requirements')
                            ->label('Requirements')
                            ->placeholder('Type a requirement and press Enter')
                            ->splitKeys(['Enter'])
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Responsibilities')
                    ->schema([
                        Forms\Components\TagsInput::make('responsibilities')
                            ->label('Responsibilities')
                            ->placeholder('Type a responsibility and press Enter')
                            ->splitKeys(['Enter'])
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Job Title')
                    ->searchable()
                    ->sortable()
                    ->limit(40),
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
                    ->searchable()
                    ->badge(),
                Tables\Columns\TextColumn::make('closing_date')
                    ->label('Closes')
                    ->date('M d, Y')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('applications_count')
                    ->label('Apps')
                    ->counts('applications')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active?'),
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
                        'Recruitment' => 'Recruitment',
                        'Immigration' => 'Immigration',
                        'HR Strategy' => 'HR Strategy',
                        'Business' => 'Business',
                        'Business Development' => 'Business Development',
                        'Mining' => 'Mining',
                        'Finance' => 'Finance',
                        'Operations' => 'Operations',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('View'),
                Tables\Actions\EditAction::make()->label('Edit'),
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

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\JobListingResource\Pages\ListJobListing::route('/'),
            'create' => \App\Filament\Resources\JobListingResource\Pages\CreateJobListing::route('/create'),
            'edit' => \App\Filament\Resources\JobListingResource\Pages\EditJobListing::route('/{record}/edit'),
        ];
    }
}
