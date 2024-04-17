@include('layout.header')

<main class="p-8">

    <div class="bg-white p-8 rounded-lg shadow-lg">

        <h1 class="text-3xl text-center py-4">Book List</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($books as $book)
            <div class="bg-gray-100 rounded-lg p-4">
                <h2 class="text-xl font-semibold">{{$book->title}}</h2>
                <p class="text-gray-700 mb-2">By {{$book->author}}</p>
                <p class="text-gray-600">{{$book->description}}</p>
                <p class="text-gray-600 mt-2">ISBN: {{$book->ISBN}}</p>
                <p class="text-gray-600">Published: {{$book->date_published}}</p>
            </div>
            @endforeach

        </div>

    </div>


</main>

@include('layout.footer')
