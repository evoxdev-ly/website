<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $title = 'Conf. Gerais';
    protected static ?string $slug = 'configuracoes-gerais';
    protected static ?string $navigationGroup = 'Configurações';
    protected static ?int $navigationSort = 8;

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            Setting::firstOrFail()->toArray()
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Configurações')
                    ->persistTabInQueryString()
                    ->tabs([
                        Tab::make('Site')
                            ->icon('heroicon-o-window')
                            ->columns(2)
                            ->schema([
                                FileUpload::make('logo_header')
                                    ->label('Logo no header')
                                    ->image()
                                    ->required()
                                    ->directory('settings')
                                    ->disk('public'),
                                FileUpload::make('logo_footer')
                                    ->label('Logo no footer')
                                    ->image()
                                    ->required()
                                    ->directory('settings')
                                    ->disk('public'),

                                Textarea::make('about_us')
                                    ->label('Texto "Sobre nós"')
                                    ->columnSpanFull(),

                                TextInput::make('phone')
                                    ->label('Telefone')
                                    ->tel()
                                    ->mask('(99) 99999-9999'),

                                TextInput::make('contact_email')
                                    ->label('E-mail de contato')
                                    ->email(),
                                

                                Textarea::make('metatag_description')
                                    ->label('Descrição metatag')
                                    ->columnSpanFull(),

                                TagsInput::make('metatag_keywords')
                                    ->label('Palavras-chave metatag'),
                            ]),
                        Tab::make('SMTP')
                            ->icon('heroicon-o-envelope-open')
                            ->columns(2)
                            ->schema([
                                TextInput::make('smtp_host')
                                    ->label('Host')
                                    ->required(),

                                TextInput::make('smtp_port')
                                    ->label('Porta')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('smtp_username')
                                    ->label('Usuário')
                                    ->required(),

                                TextInput::make('smtp_password')
                                    ->label('Senha')
                                    ->password()
                                    ->revealable()
                                    ->required(),

                                Select::make('smtp_encryption')
                                    ->label('Criptografia')
                                    ->options([
                                        'tls' => 'TLS',
                                        'ssl' => 'SSL',
                                    ])
                                    ->default('tls')
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('smtp_from_address')
                                    ->label('Endereço Remetente')
                                    ->email()
                                    ->required(),

                                TextInput::make('smtp_from_name')
                                    ->label('Nome Remetente')
                                    ->required(),

                                TextInput::make('email_receiver')
                                    ->label('Endereço Receptor')
                                    ->email()
                                    ->required(),
                            ]),
                        Tab::make('Redes Sociais')
                            ->icon('heroicon-o-share')
                            ->schema([
                                TextInput::make('social_facebook')
                                    ->label('Facebook')
                                    ->prefixIcon('fab-facebook')
                                    ->placeholder('https://facebook.com/sua-pagina'),

                                TextInput::make('social_instagram')
                                    ->label('Instagram')
                                    ->prefixIcon('fab-instagram')
                                    ->placeholder('https://instagram.com/seu-perfil'),

                                TextInput::make('social_linkedin')
                                    ->label('LinkedIn')
                                    ->prefixIcon('fab-linkedin')
                                    ->placeholder('https://linkedin.com/in/seu-perfil'),

                                TextInput::make('social_twitter')
                                    ->label('Twitter / X')
                                    ->prefixIcon('fab-twitter')
                                    ->placeholder('https://twitter.com/seu-usuario'),

                                TextInput::make('social_youtube')
                                    ->label('YouTube')
                                    ->prefixIcon('fab-youtube')
                                    ->placeholder('https://youtube.com/@seucanal'),

                                TextInput::make('social_github')
                                    ->label('GitHub')
                                    ->prefixIcon('fab-github')
                                    ->placeholder('https://github.com/seu-usuario'),

                                TextInput::make('social_whatsapp')
                                    ->label('WhatsApp')
                                    ->prefixIcon('fab-whatsapp')
                                    ->placeholder('https://wa.me/seunumero')
                                    ->helperText('Use formato internacional: https://wa.me/5511999999999'),
                                Toggle::make('whatsapp_floating')
                                    ->label('Ativar botão flutuante do WhatsApp')
                                    ->inline(false)
                                    ->helperText('Exibe um botão fixo no canto da tela com link para seu WhatsApp'),
                            ]),
                    ])
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Salvar')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $data['phone'] = preg_replace('/\D/', '', $data['phone']);

        Setting::firstOrFail()->update($data);

        Notification::make()
            ->success()
            ->title('Configurações atualizadas com sucesso!')
            ->send();
    }
}
