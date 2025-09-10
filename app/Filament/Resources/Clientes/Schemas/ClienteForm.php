<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TextInput::make('cpf_cnpj')
                    ->label('CPF/CNPJ'),
                TextInput::make('telefone')
                    ->tel(),
                TextInput::make('rua'),
                TextInput::make('numero')
                    ->label('Número'),
                TextInput::make('complemento'),
                TextInput::make('bairro'),
                TextInput::make('cidade'),
                TextInput::make('ponto_referencia')
                    ->label('Ponto Referência'),
            ]);
    }
}
