@extends ('backend.layouts.app')

@section ('title', __('labels.backend.orphans.management') . ' | ' . __('labels.backend.orphans.create'))

@section('breadcrumb-links')
  @include('backend.orphans.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.orphan.store'))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.orphans.management') }}
                        <small class="text-muted">{{ __('labels.backend.orphans.create') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />
            @include('backend.orphans.fields')
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.orphan.index'), __('buttons.general.cancel')) }}
                </div><!--col-->
                <div class="col text-right">
                    {{form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection