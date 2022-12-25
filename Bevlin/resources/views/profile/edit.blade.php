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
                    <div class="max-w-xl p-4">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                    <hr class="m-0">
                    <div class="max-w-xl p-4">
                        @include('profile.partials.update-password-form')
                    </div>
                    <hr class="m-0">
                    <div class="max-w-xl p-4">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>

            </div>

        </div>
@endsection
