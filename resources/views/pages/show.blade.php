<x-layouts.main-layout :title="$book->title">
    <div class="py-20 px-20 my-14">
        <div class="flex space-x-4">
            <img alt="{{ $book->title }}" class="max-w-[220px]" src="{{ asset('storage/' . $book->image) }}">
        </div>
        <div class="pt-8 space-y-2">
            <h2 class="text-xl font-bold"> {{ $book->title }} </h2>
            <p> {{ $book->description }} </p>
            <p><span class="font-semibold">Auteur:</span> {{ $book->author }} </p>
            <p><span class="font-semibold">Prix:</span> {{ $book->price }} </p>
            <p><span class="font-semibold">Nombre de pages:</span> {{ $book->nombre_pages }} </p>
        </div>
        @auth
            @if (Auth::user()->is_admin == 1)
                <div class="pt-6">
                    <x-btn-delete :book="$book" />
                    <a class="bg-green-700 rounded-lg p-2" href="{{ $book->id }}/edit">Modifier</a>
                </div>
            @endif
        @endauth
    </div>
</x-layouts.main-layout>
