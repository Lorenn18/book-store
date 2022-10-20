<x-layouts.main-layout title="Accueil">
    <div class="py-20 px-24">
        <div class="flex flex-col ">
            <div class="overflow-x-auto bg-blue-700 w-full block">
                <table class="">
                    <!-- head -->
                    <thead class="">
                        <tr class="flex gap-24">
                            <th></th>
                            <th>Title</th>
                            <th>Prix</th>
                            <th>Auteur</th>
                        </tr>
                    </thead>
                </table>
            </div>
            @forelse ($books as $book)
                <x-bookCard :title="$book->title" :price="$book->price" :author="$book->author" />
                <p>Editer: <a href="books/{{ $book->id }}" class="font-semibold">
                        Voir
                    </a>
                </p>
            @empty
                <p>Pas de livre actuellement</p>
            @endforelse
        </div>
        <div class="">
            <div class="my-12 flex justify-end">
                {{ $books->links() }}
            </div>
        </div>
    </div>
</x-layouts.main-layout>
