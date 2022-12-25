@extends('../home2')
@section('page_content')



    <div class="xl:max-w-7xl sm:max-w-full w-100 mx-auto shadow row  bg-white rounded">
            <div class="col-3 px-0">

                <div class="w-100">
                    @include('profile.partials.menu')
                </div>


            </div>

            <div class="col-9 m-0 flex px-0 justify-end">
                <div class="vr h-100" style="width: 1px !important;"></div>
                <div class="w-100">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </div>

            </div>

        </div>
@endsection
