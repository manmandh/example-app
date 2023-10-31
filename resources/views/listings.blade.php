<head>
    <title>Test</title>
    <!-- Fonts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
   
    <h1>{{$heading}}</h1>

    @unless(count($listings)==0)

    @foreach($listings as $listing)
        <h2>
            <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
        <h2>
        <p>
            {{$listing['description']}}
        <p>
    @endforeach

    @else
    <p>No listings found</p>
    @endunless
</head>