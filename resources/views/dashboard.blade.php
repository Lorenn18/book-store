<x-layouts.main-layout title="Dashboard">
    <div class="px-20 py-12">
        <h1 class="text-xl">Hi, {{ Auth::user()->name }}</h1>
        <div class="py-8">
            <a href="{{ route('books.create') }}">Ajouter un livre</a>
        </div>
        {{-- <a href=" {{ route('categories.index') }} ">Gérer les catégories</a> --}}
    </div>
</x-layouts.main-layout>
