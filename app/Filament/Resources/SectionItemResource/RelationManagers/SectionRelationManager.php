<?php

namespace App\Filament\Resources\SectionItemResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionRelationManager extends RelationManager
{
    protected static string $relationship = 'section';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'experiences' => 'Experiences',
                        'educations' => 'Educations',
                        'skills' => 'Skills',
                        'languages' => 'Languages',
                        'interests' => 'Interests'
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('name', match($state) {
                            'experiences' => 'Experiences',
                            'educations' => 'Educations',
                            'skills' => 'Skills',
                            'languages' => 'Languages',
                            'interests' => 'Interests'
                        });
                    }),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->reactive()
                    ->maxLength(255)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
