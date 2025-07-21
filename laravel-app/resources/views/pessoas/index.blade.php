<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pessoas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('pessoas.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Nova Pessoa</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">Nome</th>
                            <th class="px-6 py-3">Sobrenome</th>
                            <th class="px-6 py-3">CPF</th>
                            <th class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pessoas as $pessoa)
                        <tr>
                            <td class="border px-6 py-2">{{ $pessoa->nome }}</td>
                            <td class="border px-6 py-2">{{ $pessoa->sobrenome }}</td>
                            <td class="border px-6 py-2">{{ $pessoa->cpf }}</td>
                            <td class="border px-6 py-2">
                                <a href="{{ route('pessoas.edit', $pessoa) }}" class="text-blue-600">Editar</a>
                                <form method="POST" action="{{ route('pessoas.destroy', $pessoa) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 ml-2" onclick="return confirm('Remover?')">Apagar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
