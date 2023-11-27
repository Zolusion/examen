<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Date;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // Icon from the sidebar
    protected static ?string $navigationIcon = 'heroicon-o-users';

    // This table shows the textinput and the placeholder in the form 
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->placeholder('Hans'),
                TextInput::make('surname')
                    ->required()
                    ->placeholder('Bruinsma'),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->placeholder('voorbeeld@ara.nl'),

                // When clicking on 'job' it has a dropwdown menu to choose from
                Select::make('job')
                    ->options([
                        'frontendDeveloper' => 'Frontend Developer',
                        'backendDeveloper' => 'Backend Developer',
                        'manager' => 'Manager',
                        'accountManagement' => 'Account Management',
                        'juniorDesigner' => 'Junior Designer',
                        'juniorDeveloper' => 'Junior Developer',
                        'trafficManager' => 'Traffic Manager',
                        'creativeDirector' => 'Creative Director',
                        'managingDirector' => 'Managing Director',
                        'uXDesigner' => 'UX Designer',
                        'artDirector' => 'Art Director',
                    ])
                    ->required(),

                // You can choose roles
                Select::make('role')
                    ->options([
                        'user' => 'User',
                        'editor' => 'Editor',
                        'admin' => 'Administrator',
                    ])
                    ->required(),

                // Permission level for what each person can access to
                Select::make('permission_level')
                    ->options([
                        'user' => 'User',
                        'editor' => 'Editor',
                        'admin' => 'Administrator',
                    ])
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->autocomplete('new-password')
                    ->required()
                    ->placeholder('********'),
            ]);
    }

    // This is the column in the form on top of the textinput
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('surname')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('job')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('permission_level')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
