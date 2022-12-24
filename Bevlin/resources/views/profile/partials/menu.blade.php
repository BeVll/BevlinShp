<ul class="list-group rounded-0 profile_menu">

    <li class="list-group-item @if(Route::currentRouteName() == "profile.edit"){{("active")}}@endif">
        <a href="/profile/orders">
            <div class="li_icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <span>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
        </a>
    </li>
    <li class="list-group-item @if(Route::currentRouteName() == "profile.orders"){{("active")}}@endif">
        <a href="/profile/orders">
            <div class="li_icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <span>{{__("My orders")}}</span>
        </a>
    </li>

    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item"></li>
</ul>
