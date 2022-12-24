@extends('../home2')
@section('page_content')



    <div style="padding-top: 90px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

