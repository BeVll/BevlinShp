@extends('../home2')
@section('page_content')
<div>

    <ul>

        @foreach(config('app.available_locales') as $lang)
            <li>
                {{$lang}}
            </li>
        @endforeach
        @foreach($categories as $category)

            <li>
                {!!$category->icon!!}
                @if(in_array(App::getLocale(), config('app.available_locales')))
                    <span>{{ $category->{'title_'.App::getLocale()} }}</span>
                @else
                    <span>{{ $category->{'title_'.config('app.fallback_locale')} }}</span>
                @endif
            </li>
        @endforeach
        @php
            $image = Storage::disk('ftp')->get('home.png');

        // Put that image on local storage.
            Storage::disk('local')->put('home.png', $image);

            $url = Storage::url('home.png');

            $directories = \Illuminate\Support\Facades\Storage::disk('ftp')->files("/");
            echo($directories);
        @endphp


    </ul>
    <img src="{{$url}}" alt="">
</div>
@endsection
