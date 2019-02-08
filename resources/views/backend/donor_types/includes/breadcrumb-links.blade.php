<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('menus.backend.donor_types.main') }}</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.donor_type.index') }}">{{ __('menus.backend.donor_types.all') }}</a>
                <a class="dropdown-item" href="{{ route('admin.donor_type.create') }}">{{ __('menus.backend.donor_types.create') }}</a>
            </div>
        </div><!--dropdown-->
        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>