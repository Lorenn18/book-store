<x-layouts.main-layout title="Création livre">
    <div class="container pb-24">
        <h1 class="pt-10 pb-10 text-4xl font-bold">New Livre</h1>
        <form action="{{ route('books.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="max-w-md">
                {{-- title --}}
                <input class="block w-full rounded-lg border-gray-400" name="title" placeholder="Titre du livre"
                    type="text" value="{{ old('title') }}">
                <x-error-msg name="title" />
                {{-- description --}}
                <textarea class="mt-5 block w-full rounded-lg border-gray-400" cols="30" name="content"
                    placeholder="Votre description ...." rows="10">{{ old('description') }}</textarea>
                <x-error-msg name="description" />
                {{-- auteur --}}
                <input type="text" name="author" placeholder="Auteur"
                    class="block py-2 w-full rounded-lg border-gray-400 ">
                <x-error-msg name="author" />
                {{-- prix --}}
                <input type="text" name="price" placeholder="Price"
                    class="block py-2 w-full rounded-lg border-gray-400 ">
                <x-error-msg name="price" />
                {{-- Nombre de pages --}}
                <input type="text" name="nombre_pages" placeholder="Nombre de pages"
                    class="block py-2 w-full rounded-lg border-gray-400 ">
                <x-error-msg name="nombre_pages" />
            </div>
            {{-- image  --}}
            <div class="py-2">
                <label for="">Image :</label>
                <input class="block" id="" name="image" type="file">
                <x-error-msg name="image" />
            </div>
            <button class="bg-blue-500 rounded-lg mt-6 p-2" type="submit">Envoyer</button>
    </div>
    </form>
    </div>

</x-layouts.main-layout>
