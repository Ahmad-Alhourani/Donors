@extends ('backend.layouts.app')

@section ('title', __('labels.backend.donor_types.management') . ' | ' . __('labels.backend.donor_types.edit'))

@section('breadcrumb-links')
@include('backend.donor_types.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($donor_type, 'PATCH', route('admin.donor_type.update', $donor_type->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.donor_types.management') }}
                        <small class="text-muted">{{ __('labels.backend.donor_types.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.donor_types.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.donor_type.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection