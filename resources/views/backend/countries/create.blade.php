@extends ('backend.layouts.app')

@section ('title', __('labels.backend.countries.management') . ' | ' . __('labels.backend.countries.create'))

@section('breadcrumb-links')
  @include('backend.countries.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.country.store'))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.countries.management') }}
                        <small class="text-muted">{{ __('labels.backend.countries.create') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />
            @include('backend.countries.fields')
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.country.index'), __('buttons.general.cancel')) }}
                </div><!--col-->
                <div class="col text-right">
                    {{form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection