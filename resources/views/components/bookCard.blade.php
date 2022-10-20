@props(['title', 'author', 'price'])
<div class="overflow-x-auto bg-blue-500 ">
    <table class="table-row w-full ">

        <tbody class=" ">
            <!-- row 1 -->
            <tr class="grid grid-flow-col gap-6">
                <th></th>
                <td>{{ $title }}</td>
                <td>{{ $price }}</td>
                <td>{{ $author }}</td>
        </tbody>
    </table>
</div>
