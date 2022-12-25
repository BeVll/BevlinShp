@extends('profile/profile')
@section('profile_content')



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

@endsection
