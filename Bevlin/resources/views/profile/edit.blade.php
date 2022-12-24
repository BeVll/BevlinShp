@extends('../home2')
@section('page_content')



    <div class="pt-20">
        <div class="lg:max-w-7xl sm:max-w-5xl mx-auto space-y-6 shadow  row mb-5 bg-white rounded">
            <div class="col-3 px-0">

                <div class="w-100">
                    <ul class="list-group rounded-0 profile_menu">
                        <li class="list-group-item active" aria-current="true"><div class="li_icon"><i class="bi bi-person-circle"></i></div><span>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span></li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
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
    </div>

