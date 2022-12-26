<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 mb-0">
        @csrf
        @method('patch')

        <div class="mt-3">
            <label for="phone" class="form-label">{{__("First name")}}</label>
            <input id="firstname" name="firstname" type="text" class="form-control rounded mt-2" value="{{$user->firstname}}" required autofocus autocomplete="firstname" />
            @error("firstname")
            <span class="error_input">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="phone" class="form-label">{{__("Last name")}}</label>
            <input id="lastname" name="lastname" type="text" class="form-control rounded mt-2" value="{{$user->lastname}}" required autofocus autocomplete="lastname" />
            @error("lastname")
            <span class="error_input">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="phone" class="form-label">{{__("Surname")}}</label>
            <input id="surname" name="surname" type="text" class="form-control rounded mt-2" value="{{old('surname', $user->surname)}}" required autofocus autocomplete="surname" />
            @error("surname")
            <span class="error_input">{{$message}}</span>
            @enderror
        </div>


        <div class="flex items-center gap-4 mt-4">
            <button class="btn btn-primary border text-white px-4">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
