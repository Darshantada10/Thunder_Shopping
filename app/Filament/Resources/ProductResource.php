<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Brand;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('brand_id'),
                Select::make('brand_id')
                ->label('Brand Name')
                ->options(Brand::all()->pluck('name','id'))
                ->required()
                ->searchable()
                ->placeholder('Select a Brand'),


                TextInput::make('product_data.name'),
                TextInput::make('product_data.original_price'),
                TextInput::make('product_data.discounted_price'),
                TextInput::make('product_data.seller'),
                TextInput::make('product_data.quantity'),
                TextInput::make('product_data.manufacturer'),
                TextInput::make('product_data.rating'),
                // TextInput::make('photos'),
                TextInput::make('product_data.description'),
                TextInput::make('product_data.short_description'),
                TextInput::make('product_data.country'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('id'),
                TextColumn::make('product_data.name')->label('name'),
                TextColumn::make('product_data.original_price')->label('origianal price'),
                TextColumn::make('product_data.discounted_price')->label('discount price'),
                TextColumn::make('product_data.quantity')->label('quantity'),
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
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
