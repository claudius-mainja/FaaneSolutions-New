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

    protected static ?string $navigationLabel = 'Job Applications';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Applicant Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('candidate.first_name')
                            ->label('First Name')
                            ->disabled(),
                        Forms\Components\TextInput::make('candidate.last_name')
                            ->label('Last Name')
                            ->disabled(),
                        Forms\Components\TextInput::make('candidate.email')
                            ->label('Email')
                            ->disabled()
                            ->copyable(),
                        Forms\Components\TextInput::make('candidate.phone')
                            ->label('Phone')
                            ->disabled()
                            ->copyable(),
                    ]),
                Forms\Components\Section::make('Application Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('job_listing_id')
                            ->label('Applied For')
                            ->relationship('jobListing', 'title')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->disabled(),
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
                        Forms\Components\Placeholder::make('submitted_at')
                            ->label('Submitted')
                            ->content(fn ($record) => $record?->created_at?->format('M d, Y g:i A')),
                    ]),
                Forms\Components\Section::make('Documents')
                    ->columns(2)
                    ->schema([
                        Forms\Components\FileUpload::make('resume_path')
                            ->label('Resume')
                            ->directory('applications/resumes')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->openable()
                            ->downloadable(),
                        Forms\Components\FileUpload::make('cover_letter_path')
                            ->label('Cover Letter')
                            ->directory('applications/cover-letters')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->openable()
                            ->downloadable(),
                    ]),
                Forms\Components\Section::make('Cover Letter Content')
                    ->schema([
                        Forms\Components\Textarea::make('candidate.cover_letter')
                            ->label('Cover Letter')
                            ->disabled()
                            ->rows(8)
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Internal Notes')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->label('Recruiter Notes')
                            ->placeholder('Add notes about this applicant...')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate.full_name')
                    ->label('Name')
                    ->searchable(['first_name', 'last_name'])
                    ->sortable(),
                Tables\Columns\TextColumn::make('candidate.email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('candidate.phone')
                    ->label('Phone')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('jobListing.title')
                    ->label('Job Applied')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
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
                Tables\Columns\IconColumn::make('has_resume')
                    ->label('Resume')
                    ->boolean()
                    ->getStateUsing(fn ($record) => $record->resume_path ? true : false),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime('M d, Y')
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
                Tables\Filters\SelectFilter::make('job_listing_id')
                    ->label('Job')
                    ->relationship('jobListing', 'title')
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Review'),
                Tables\Actions\EditAction::make()->label('Update Status'),
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

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ApplicationResource\Pages\ListApplication::route('/'),
            'create' => \App\Filament\Resources\ApplicationResource\Pages\CreateApplication::route('/create'),
            'edit' => \App\Filament\Resources\ApplicationResource\Pages\EditApplication::route('/{record}/edit'),
            'view' => \App\Filament\Resources\ApplicationResource\Pages\ViewApplication::route('/{record}'),
        ];
    }
}
