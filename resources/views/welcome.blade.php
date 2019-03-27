@extends("layout")

@section("content")

<section>
    <h1>Welcome Home!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ratione nam quisquam reprehenderit. Asperiores
        voluptatem numquam placeat perspiciatis ipsa, voluptatum ratione non possimus labore fugiat! A labore aspernatur
        atque dignissimos.</p>

    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</section>

@endsection
