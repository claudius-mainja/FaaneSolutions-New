<?php

namespace App\Filament\Resources;

use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-arrow-up';

    protected static ?string $navigationGroup = 'Recruitment';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Application Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('job_listing_id')
                            ->label('Job Listing')
                            ->relationship('jobListing', 'title')
                            ->required()
                            ->searchable()
                            ->preload(),
                        Forms\Components\Select::make('candidate_id')
                            ->label('Candidate')
                            ->relationship('candidate', 'email')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->first_name} {$record->last_name} ({$record->email})"),
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'reviewed' => 'Reviewed',
                                'shortlisted' => 'Shortlisted',
                                'rejected' => 'Rejected',
                                'hired' => 'Hired',
                            ])
                            ->required()
                            ->default('pending'),
                    ]),
                Forms\Components\Section::make('Files')
                    ->columns(2)
                    ->schema([
                        Forms\Components\FileUpload::make('resume_path')
                            ->label('Resume')
                            ->directory('applications/resumes')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']),
                        Forms\Components\FileUpload::make('cover_letter_path')
                            ->label('Cover Letter')
                            ->directory('applications/cover-letters')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']),
                    ]),
                Forms\Components\Section::make('Notes')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jobListing.title')
                    ->label('Job')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('candidate.full_name')
                    ->label('Candidate')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('candidate.email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'reviewed' => 'info',
                        'shortlisted' => 'success',
                        'rejected' => 'danger',
                        'hired' => 'success',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reviewed' => 'Reviewed',
                        'shortlisted' => 'Shortlisted',
                        'rejected' => 'Rejected',
                        'hired' => 'Hired',
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
        return static::getModel()::where('status', 'pending')->count() ?: null;
    }
}
