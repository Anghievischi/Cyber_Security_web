<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoticiaResource\Pages;
use App\Models\Noticia;
use Filament\Forms\Components\{FileUpload, RichEditor, Section, TextInput, ToggleButtons, Tabs};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;

class NoticiaResource extends Resource
{
    protected static ?string $model = Noticia::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

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
                                TextInput::make('titulo')
                                    ->required()
                                    ->label('Título'),

                                RichEditor::make('conteudo')
                                    ->required()
                                    ->label('Conteúdo')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ]),
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
                        Tabs\Tab::make('Upload de Imagens')
                        ->icon('heroicon-m-photo')
                            ->schema([
                                FileUpload::make('cover')
                                    ->required()
                                    ->label('Foto de Capa')
                                    ->image()
                                    ->openable()
                                    ->downloadable()
                                    ->imageEditor()
                                    ->directory('images'),
                            ]),
                    ]),

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
                    ->sortable(),
                Tables\Columns\TextColumn::make('conteudo')
                    ->limit(50)
                    ->html()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('cover')
                    ->label('Foto de Capa')->circular()
                    ->disk('public')
                    ->alignment(Alignment::Center),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->alignment(Alignment::Center)
                    ->color(fn (string $state): string => match ($state) {
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
            ->filters([])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                ])->icon('heroicon-m-ellipsis-vertical')
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
            'index' => Pages\ListNoticias::route('/'),
            'create' => Pages\CreateNoticia::route('/create'),
            'edit' => Pages\EditNoticia::route('/{record}/edit'),
            'delete' => Pages\DeleteNoticia::route('/{record}/delete'),
        ];
    }

    public static function newModel(): Noticia
    {
        return new Noticia();
    }
}
