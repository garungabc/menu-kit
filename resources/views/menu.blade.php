<nav class="{{ $menu_class }}" id="{{ $mobile_menu_class }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 menu_col">
                @if (has_nav_menu('main-menu'))
                    {!! wp_nav_menu(['theme_location' => $theme_location, 'menu_class' => 'menu-primary']) !!}
                @endif
                <div class="mobile_menu_primary"></div>
            </div>
        </div>
    </div>
</nav>