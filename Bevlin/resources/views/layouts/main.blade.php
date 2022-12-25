@extends('../home2')
@section('page_content')
<div>

    <ul>
        @php
           $file = \Illuminate\Support\Facades\Storage::get('example.txt');
           $file2 = \Illuminate\Support\Facades\Storage::download('example.txt');
        @endphp
        @foreach(config('app.available_locales') as $lang)
            <li>
                {{$lang}}
            </li>
        @endforeach
        @foreach($categories as $category)

            <li>
                <img class="text-white" src="/storage/icons/categories_icons/{{$category->icon}}" height="50" width="50" alt="">
                @if(in_array(App::getLocale(), config('app.available_locales')))
                    <span>{{ $category->{'title_'.App::getLocale()} }}</span>
                @else
                    <span>{{ $category->{'title_'.config('app.fallback_locale')} }}</span>
                @endif
            </li>
        @endforeach
        @php
//

        @endphp


    </ul>

</div>
@endsection
