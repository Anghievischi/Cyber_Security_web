<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Components\Tabs;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-m-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Geral')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\TextInput::make('titulo')->required()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('link')
                                    ->prefix('https://')
                                    ->maxLength(255),
                                Forms\Components\Toggle::make('abrir_nova_janela')
                                    ->label('Abrir em uma nova janela'),
                                Section::make('Status')
                                    ->schema([
                                        ToggleButtons::make('status')
                                            ->options([
                                                'draft' => 'Rascunho',
                                                'published' => 'Publicado'
                                            ])->inline()->label('')
                                            ->default('published')
                                            ->icons([
                                                'draft' => 'heroicon-o-x-circle',
                                                'published' => 'heroicon-o-check-circle'
                                            ])
                                    ]),
                            ]),
                        Tabs\Tab::make('Upload Imagem')
                            ->icon('heroicon-m-photo')
                            ->schema([
                                FileUpload::make('image')
                                    ->required()
                                    ->label('Imagem Banner Desktop (1920x600px)')
                                    ->image()
                                    ->openable()
                                    ->downloadable()
                                    ->imageEditor()
                                    ->directory('banners'),
                                FileUpload::make('image_mobile')
                                    ->required()
                                    ->label('Imagem Banner Mobile (600x600px)')
                                    ->image()
                                    ->openable()
                                    ->downloadable()
                                    ->imageEditor()
                                    ->directory('banners_mobile'),
                            ])
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->extremePaginationLinks()
            ->paginated([10, 20, 30, 40, 'all'])
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable()
                    ->alignment(Alignment::Center),
                Tables\Columns\ImageColumn::make('image')
                    ->circular()
                    ->label('Imagem do banner')
                    ->alignment(Alignment::Center),
                Tables\Columns\TextColumn::make('link')
                    ->alignment(Alignment::Center)
                    ->icon('heroicon-c-globe-asia-australia')
                    ->iconColor('secondary')
                    ->searchable(),
                Tables\Columns\IconColumn::make('abrir_nova_janela')
                    ->boolean()
                    ->alignment(Alignment::Center),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->alignment(Alignment::Center)
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->alignment(Alignment::Center)
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->alignment(Alignment::Center)
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'draft' => 'Rascunho',
                        'published' => 'Publicado',
                    })
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                ])
                    ->icon('heroicon-m-ellipsis-vertical')
                    ->size(ActionSize::Small)
                    ->color('secondary')
                    ->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
