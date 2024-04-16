@include('layout.header')

<main class="p-8">

    <div class="bg-white p-8 rounded-lg shadow-lg">

        <table class="w-full table-auto">

            <h1 class="text-3xl text-center py-4">Book List</h1>

            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="border px-4 py-2">ISBN</th>
                    <th class="border px-4 py-2">Book Title</th>
                    <th class="border px-4 py-2">Author</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Date of Publication</th>
                </tr>
            </thead>

            <tbody>

                @foreach($books as $book)
                
                <tr>

                    <td class="border px-4 py-2">{{$book->ISBN}}</td>
                    <td class="border px-4 py-2">{{$book->title}}</td>
                    <td class="border px-4 py-2">{{$book->author}}</td>
                    <td class="border px-4 py-2">{{$book->description}}</td>
                    <td class="border px-4 py-2">{{$book->date_published}}</td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>


</main>

@include('layout.footer')