<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Youth3Resource\Pages;
use App\Filament\Resources\Youth3Resource\RelationManagers;
use App\Models\Youth;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Youth3Resource extends Resource
{
    protected static ?string $model = Youth::class;
    protected static ?string $navigationGroup = 'Youth Informations per Purok';
    protected static ?string $label = 'Youth Information';
    protected static ?string $navigationLabel = 'Punao';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('purok', 'Punao');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('purok')
                ->default('Punao'),
                Forms\Components\TextInput::make('firstname')
                    ->label(__('First name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middlename')
                    ->label(__('Middle name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lastname')
                    ->label(__('Last name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('age')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('birthday')
                    ->required(),
                Forms\Components\Select::make('sex')
                    ->options([
                        'M' => 'Male',
                        'F' => 'Female',
                    ]),
                Forms\Components\Select::make('youth_classification')
                    ->options([
                        'ISY' => 'ISY',
                        'OSY' => 'OSY',
                        'WY' => 'WY',
                        'YSN (PWD/IP)' => 'YSN (PWD/IP)',
                    ]),
                Forms\Components\Select::make('youth_age_group')
                    ->label(__('Age Group'))
                    ->options([
                        'Child Youth' => 'Child Youth',
                        'Core Youth' => 'Core Youth',
                        'Young Adult' => 'Young Adult',

                    ]),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label(__('Home Address'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('highest_educational_attainment')
                    ->options([
                        'Elementary' => 'Elementary',
                        'High School' => 'High School',
                        'College' => 'College',
                        'Vocational Course' => 'Vocational Course',
                        'Others' => 'Others',
                    ]),
                    Forms\Components\Toggle::make('registered_voter')
                    ->label(__('Registered Voter?'))
                    ->required(),
                    Forms\Components\Select::make('work_status')
                    ->options([
                        'Looking' => 'Looking',
                        'Unemployed' => 'Unemployed',
                        'Employed' => 'Employed',
                    ]),
                Forms\Components\Toggle::make('last_election_voter')
                    ->label(__('Voted Last Election?'))
                    ->required(),
                    Forms\Components\TextInput::make('attended_kk_assembly_times')
                    ->label(__('If yes and attended a KK assembly, how many times?'))
                    ->numeric()
                    ->default(null),
                Forms\Components\Toggle::make('attended_kk_assembly')
                    ->label(__('Attended a KK assembly?'))
                    ->required(),
                Forms\Components\TextInput::make('region')
                    ->required()
                    ->maxLength(255)
                    ->default('IV'),
                Forms\Components\TextInput::make('province')
                    ->required()
                    ->maxLength(255)
                    ->default('Neg. Occ.'),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255)
                    ->default('Talisay City'),
                Forms\Components\TextInput::make('barangay')
                    ->required()
                    ->maxLength(255)
                    ->default('Zone-3'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('firstname')
                    ->label(__('First name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('middlename')
                    ->label(__('Middle name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->label(__('Last name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('age')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('youth_classification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('youth_age_group')
                    ->label(__('Age Group'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('highest_educational_attainment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('work_status')
                    ->searchable(),
                Tables\Columns\IconColumn::make('registered_voter')
                    ->label(__('Registered Voter?'))
                    ->boolean(),
                Tables\Columns\IconColumn::make('last_election_voter')
                    ->label(__('Voted Last Election?'))
                    ->boolean(),
                Tables\Columns\IconColumn::make('attended_kk_assembly')
                    ->label(__('Attended a KK assembly?'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('attended_kk_assembly_times')
                    ->label(__('If yes and attended a KK assembly, how many times?'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('region')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('barangay')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListYouth3s::route('/'),
            'create' => Pages\CreateYouth3::route('/create'),
            'edit' => Pages\EditYouth3::route('/{record}/edit'),
        ];
    }
}
