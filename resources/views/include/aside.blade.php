<div class="aside-header">
    {!! link_to("/", "Welcome", ["class"=>"bold center"]) !!}
    <div class="dropdown">
        <ul>
            <li>{!! link_to_route("user.index", "Usuario",null,["class"=>"center text-success"]) !!}</li>
            <li>{!! link_to_route("role.index", "Role",null,["class"=>"center text-success"]) !!}</li>
            <li>{!! link_to_route("roleuser.index", "Role_User",null,["class"=>"center text-success"]) !!}</li>
        </ul>
    </div>
</div>
