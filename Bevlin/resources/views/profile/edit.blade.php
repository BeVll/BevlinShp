@extends('../home2')
@section('page_content')



    <div style="padding-top: 90px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 shadow p-3 row mb-5 bg-white rounded">
            <div class="col-3 row">
                <div class="col-11">
                    <ul class="list-group profile_menu">
                        <li class="list-group-item active" aria-current="true">An active item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>

                <div class="vr col-auto" style="width: 1px"></div>
            </div>

            <div class="col-9">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <hr>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>

                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
            </div>

        </div>
    </div>

