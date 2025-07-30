<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $modelLabel = 'Home';
    protected static ?string $pluralModelLabel = 'Home';

    protected static ?string $slug = 'home';

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Site';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('')
                    ->columnSpanFull()
                    ->persistTabInQueryString()
                    ->tabs([

                        // HERO
                        Tab::make('Hero')
                            ->schema([
                                TextInput::make('hero_title')
                                    ->label('Título')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('hero_subtitle')
                                    ->label('Subtítulo')
                                    ->maxLength(255),
                                Textarea::make('hero_description')
                                    ->label('Descrição')
                                    ->rows(4),
                            ])
                            ->columns(2),

                        // MISSÃO / VISÃO / VALORES
                        Tab::make('Missão, Visão e Valores')
                            ->schema([
                                TextInput::make('mission_title')
                                    ->label('Título da Missão')
                                    ->required(),
                                Textarea::make('mission_text')
                                    ->label('Texto da Missão')
                                    ->required()
                                    ->rows(3),

                                TextInput::make('vision_title')
                                    ->label('Título da Visão')
                                    ->required(),
                                Textarea::make('vision_text')
                                    ->label('Texto da Visão')
                                    ->required()
                                    ->rows(3),

                                TextInput::make('value_title')
                                    ->label('Título dos Valores')
                                    ->required(),
                                Textarea::make('value_text')
                                    ->label('Texto dos Valores')
                                    ->required()
                                    ->rows(3),
                            ])
                            ->columns(2),

                        // SERVIÇOS
                        Tab::make('Serviços')
                            ->schema([
                                Repeater::make('services')
                                    ->relationship()
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Título')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Descrição')
                                            ->required()
                                            ->rows(3),
                                        TextInput::make('link')
                                            ->label('Link')
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->label('Serviços'),
                            ]),

                        // PROJETOS
                        Tab::make('Projetos')
                            ->schema([
                                Repeater::make('projects')
                                    ->relationship()
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Imagem')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('projects')
                                            ->columnSpanFull()
                                            ->required(),

                                        TextInput::make('title')
                                            ->label('Título')
                                            ->required(),

                                        TextInput::make('link')
                                            ->label('Link'),

                                        Textarea::make('description')
                                            ->label('Descrição')
                                            ->rows(3)
                                            ->columnSpanFull(),

                                        
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->label('Projetos'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getNavigationUrl(): string
    {
        $firstRecord = Home::first();

        if ($firstRecord) {
            return static::getUrl('edit', ['record' => $firstRecord->getKey()]);
        }

        return 'Não existe nenhum registro';
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomes::route('/'),
            // 'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDeleteAny(): bool
    {
        return false;
    }
}
