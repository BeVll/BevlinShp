<ul class="list-group profile_menu">

    <li class="list-group-item @if(Route::currentRouteName() == "profile.edit"){{("active")}}@endif">
        <a href="/profile">
            <div class="li_icon">
                <img class="icon_profile_menu" src="/storage/icons/profile_menu/profile2.png" height="30" width="30" alt="">
            </div>
            <span class="ml-2">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
        </a>
    </li>
    <li class="list-group-item @if(Route::currentRouteName() == "profile.orders"){{("active")}}@endif">
        <a href="/profile/orders">
            <div class="li_icon">
                <img class="icon_profile_menu" src="/storage/icons/profile_menu/orders2.png" height="30" width="30" alt="">
            </div>
            <span class="ml-2">{{__("My orders")}}</span>
        </a>
    </li>
    <li class="list-group-item @if(Route::currentRouteName() == "profile.wishlist"){{("active")}}@endif">
        <a href="/profile/wishlist">
            <div class="li_icon">
                <img class="icon_profile_menu" src="/storage/icons/profile_menu/wishlist2.png" height="30" width="30" alt="">
            </div>
            <span class="ml-2">{{__("Wish list")}}</span>
        </a>
    </li>
</ul>
<hr class="my-0">
<div class="d-grid gap-1 p-4">
    <form method="POST" class="d-grid gap-1" action="{{route("logout")}}">
        @csrf
        <button type="submit" class="btn btn-outline-danger ">{{__('Logout')}}</button>
    </form>
</div>
