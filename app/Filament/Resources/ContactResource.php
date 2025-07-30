<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $modelLabel = 'Contato';
    protected static ?string $pluralLabel = 'Contatos';

    protected static ?string $slug = 'contatos';
    protected static ?string $navigationGroup = 'Site';
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->label('Nome')
                    ->icon('heroicon-o-user')
                    ->weight('bold')
                    ->color('primary'),

                TextEntry::make('email')
                    ->label('E-mail')
                    ->icon('heroicon-o-envelope')
                    ->copyable(),

                
                TextEntry::make('subject')
                    ->label('Assunto')
                    ->icon('heroicon-o-document'),

                TextEntry::make('message')
                    ->label('Mensagem')
                    ->icon('heroicon-o-chat-bubble-oval-left')
                    ->columnSpanFull()
                    ->markdown(),

                TextEntry::make('created_at')
                    ->label('Data de envio')
                    ->dateTime('d/m/Y \à\s H:i')
                    ->icon('heroicon-o-calendar'),

                TextEntry::make('url')
                    ->label('Url')
                    ->icon('heroicon-o-link'),
            ]);
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
            'index' => Pages\ListContacts::route('/'),
            'view' => Pages\ViewContact::route('/{record}'),
            // 'create' => Pages\CreateContact::route('/create'),
            // 'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool {
        return false;
    }
}
