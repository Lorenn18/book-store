@props(['book'])
<div class="py-3">
    <form action="{{ route('books.destroy', $book->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this post ?')">
        @csrf
        @method('DELETE')
        <button class="bg-red-500 rounded-lg p-2" type="submit">Supprimer</button>
    </form>
</div>
