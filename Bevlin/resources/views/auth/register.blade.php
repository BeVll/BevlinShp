@extends('../home2')
@section('page_content')



    <div class="w-100 sm:max-w-md m-auto bg-dark px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
        <div class="modal-header">
            <h5 class="modal-title">{{__("Sign up")}}</h5>
        </div>
        <hr>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-4">
                    <label for="first_name" class="form-label">{{__("First name")}}</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                </div>
                <div class="mt-4">
                    <label for="last_name" class="form-label">{{__("Last name")}}</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <div class="mt-4">
                    <label for="surname" class="form-label">{{__("Surname")}}</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="mt-4">
                    <label for="email" class="form-label">{{__("Email")}}</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mt-4">
                    <label for="password" class="form-label">{{__("Password")}}</label>
                    <input type="password" class="form-control" id="password" name="password"">
                </div>



                <div class="flex items-center justify-start mt-4">
                    <button type="submit" class="btn btn-primary py-1">
                        {{ __('Register') }}
                    </button>
                    <a class="underline text-sm text-gray-600 ml-4 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>


                </div>
            </form>
    </div>

@endsection
