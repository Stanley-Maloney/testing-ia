<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes da Pessoa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>Nome:</strong> {{ $pessoa->nome }}</p>
                <p><strong>Sobrenome:</strong> {{ $pessoa->sobrenome }}</p>
                <p><strong>CPF:</strong> {{ $pessoa->cpf }}</p>
                <p><strong>Endereço:</strong> {{ $pessoa->endereco }}</p>
                <p><strong>Telefone:</strong> {{ $pessoa->telefone }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
