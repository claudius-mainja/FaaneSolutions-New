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

    protected static ?string $navigationLabel = 'Blog Posts';

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
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->placeholder('e.g. Work Permits in Zambia: Complete Guide 2026'),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Auto-generated from title. Change only if needed.'),
                        Forms\Components\Select::make('category')
                            ->options([
                                'Recruitment' => 'Recruitment',
                                'Immigration' => 'Immigration',
                                'HR Strategy' => 'HR Strategy',
                                'Business' => 'Business',
                            ])
                            ->searchable()
                            ->placeholder('Select category'),
                        Forms\Components\Toggle::make('is_published')
                            ->label('Published')
                            ->inline(false),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish Date/Time')
                            ->helperText('Set a future date to schedule publishing.'),
                    ]),
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('excerpt')
                            ->label('Short Summary (excerpt)')
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('A brief summary shown on the blog listing page. 2-3 sentences.'),
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDirectory('blog')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'strike',
                                'heading', 'h2', 'h3',
                                'blockquote', 'bulletList', 'orderedList',
                                'link', 'image', 'codeBlock',
                                'undo', 'redo',
                            ]),
                    ]),
                Forms\Components\Section::make('Search Engine Optimization (SEO)')
                    ->columns(2)
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(70)
                            ->placeholder('Leave blank to use post title')
                            ->helperText('Browser tab title. Keep under 70 characters.'),
                        Forms\Components\Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(320)
                            ->rows(3)
                            ->placeholder('Leave blank to use excerpt')
                            ->helperText('Shown in search results. Keep under 160 characters.'),
                    ]),
                Forms\Components\Section::make('Featured Image')
                    ->schema([
                        Forms\Components\TextInput::make('featured_image')
                            ->label('Image URL')
                            ->maxLength(500)
                            ->placeholder('https://images.unsplash.com/photo-xxx?w=1200&q=85')
                            ->helperText('Paste an image URL from Unsplash or another source.')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Tags')
                    ->schema([
                        Forms\Components\TagsInput::make('tags')
                            ->label('Tags')
                            ->placeholder('Add a tag')
                            ->splitKeys(['Tab', 'Enter'])
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->square()
                    ->size(60),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Recruitment' => 'info',
                        'Immigration' => 'warning',
                        'HR Strategy' => 'success',
                        'Business' => 'primary',
                        default => 'gray',
                    })
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Live')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime('M d, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published?'),
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Recruitment' => 'Recruitment',
                        'Immigration' => 'Immigration',
                        'HR Strategy' => 'HR Strategy',
                        'Business' => 'Business',
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
        return static::getModel()::where('is_published', true)->count() ?: null;
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\BlogPostResource\Pages\ListBlogPost::route('/'),
            'create' => \App\Filament\Resources\BlogPostResource\Pages\CreateBlogPost::route('/create'),
            'edit' => \App\Filament\Resources\BlogPostResource\Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
