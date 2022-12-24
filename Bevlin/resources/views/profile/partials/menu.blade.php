<ul class="list-group profile_menu">

    <li class="list-group-item @if(Route::currentRouteName() == "profile.edit"){{("active")}}@endif">
        <a href="/profile">
            <div class="li_icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <span>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
        </a>
    </li>
    <li class="list-group-item @if(Route::currentRouteName() == "profile.orders"){{("active")}}@endif">
        <a href="/profile/orders">
            <div class="li_icon">
                <i class="bi bi-card-checklist"></i>
            </div>
            <span>{{__("My orders")}}</span>
        </a>
    </li>

    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item"></li>
</ul>
<div class="d-grid gap-1 p-4">
    <form method="POST" class="d-grid gap-1" action="{{route("logout")}}">
        @csrf
        <button type="submit" class="btn btn-outline-danger ">Logout</button>
    </form>
</div>
