<?php

namespace App\Filament\Resources;

use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Details')
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
                        Forms\Components\TextInput::make('author')
                            ->maxLength(255),
                        Forms\Components\Select::make('category')
                            ->options([
                                'immigration' => 'Immigration',
                                'visa' => 'Visa',
                                'job-search' => 'Job Search',
                                'career-advice' => 'Career Advice',
                                'hr-news' => 'HR News',
                                'company-culture' => 'Company Culture',
                                'recruitment' => 'Recruitment',
                                'other' => 'Other',
                            ])
                            ->searchable(),
                        Forms\Components\Toggle::make('is_published')
                            ->label('Published'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish Date'),
                    ]),
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('excerpt')
                            ->maxLength(500)
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDirectory('blog')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Tags')
                    ->schema([
                        Forms\Components\TagsInput::make('tags')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Featured Image')
                    ->schema([
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('blog')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published'),
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'immigration' => 'Immigration',
                        'visa' => 'Visa',
                        'job-search' => 'Job Search',
                        'career-advice' => 'Career Advice',
                        'hr-news' => 'HR News',
                        'company-culture' => 'Company Culture',
                        'recruitment' => 'Recruitment',
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
        return static::getModel()::where('is_published', true)->count() ?: null;
    }
}
