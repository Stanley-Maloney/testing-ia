<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Pessoa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('pessoas.update', $pessoa) }}" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="nome" value="Nome" />
                        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" value="{{ old('nome', $pessoa->nome) }}" required />
                    </div>
                    <div>
                        <x-input-label for="sobrenome" value="Sobrenome" />
                        <x-text-input id="sobrenome" name="sobrenome" type="text" class="mt-1 block w-full" value="{{ old('sobrenome', $pessoa->sobrenome) }}" required />
                    </div>
                    <div>
                        <x-input-label for="cpf" value="CPF" />
                        <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" value="{{ old('cpf', $pessoa->cpf) }}" required />
                    </div>
                    <div>
                        <x-input-label for="endereco" value="Endereço" />
                        <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" value="{{ old('endereco', $pessoa->endereco) }}" required />
                    </div>
                    <div>
                        <x-input-label for="telefone" value="Telefone" />
                        <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" value="{{ old('telefone', $pessoa->telefone) }}" required />
                    </div>
                    <div>
                        <x-primary-button>Atualizar</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
