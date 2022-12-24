@extends('../home2')
@section('page_content')
<div>
    @php
        $categories = \App\Http\Controllers\CategoriesController::getCategories();

    @endphp
    <ul>
        @foreach($categories as $category)
            <li>
                {!!$category->icon!!}
                @if(App::getLocale() == "en")
                    <span>{{$category->title_en}}</span>
                @elseif(App::getLocale() == "ua")
                    <span>{{$category->title_ua}}</span>
                @endif
            </li>
        @endforeach
    </ul>

</div>
@endsection
