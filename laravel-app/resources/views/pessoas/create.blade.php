<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Pessoa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('pessoas.store') }}" class="space-y-4">
                    @csrf
                    <div>
                        <x-input-label for="nome" value="Nome" />
                        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div>
                        <x-input-label for="sobrenome" value="Sobrenome" />
                        <x-text-input id="sobrenome" name="sobrenome" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div>
                        <x-input-label for="cpf" value="CPF" />
                        <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div>
                        <x-input-label for="endereco" value="Endereço" />
                        <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div>
                        <x-input-label for="telefone" value="Telefone" />
                        <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div>
                        <x-primary-button>Salvar</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
