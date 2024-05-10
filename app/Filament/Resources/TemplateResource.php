<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateResource\Pages;
use App\Filament\Resources\TemplateResource\RelationManagers;
use App\Models\Template;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemplateResource extends Resource
{
    protected static ?string $model = Template::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('free_image')
                    ->required(),
                Forms\Components\TextInput::make('paid_image')
                    ->required(),
                Forms\Components\Select::make('free')
                    ->options([
                        '1' => 'Free',
                        '0' => 'Paid',
                    ])
                    ->required(),
                Forms\Components\Select::make('category')
                    ->options([
                        'interior' => 'Interior Design',
                        'maze' => 'Maze',
                        'word-puzzle' => 'Word Puzzle',
                        'money' => 'Money',
                        'todo' => 'To Do',
                        'planner' => 'Planner',
                        'health' => 'Health',
                        'math' => 'Math',
                        'games' => 'Games',
                        'coloring-books' => 'Coloring Books',
                        'sudoku' => 'Sudoku',
                        'comic' => 'Comic',
                        'music' => 'Music',
                        'journals' => 'Journals',
                        'activity' => 'Activity',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('template_url')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('free_image'),
                Tables\Columns\ImageColumn::make('paid_image'),
                Tables\Columns\SelectColumn::make('free')
                    ->options([
                        '1' => 'Free',
                        '0' => 'Paid',
                    ]),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\ImageColumn::make('template_url'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplate::route('/create'),
            'edit' => Pages\EditTemplate::route('/{record}/edit'),
        ];
    }    
}
