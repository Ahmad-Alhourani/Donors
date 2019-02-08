@extends ('backend.layouts.app')

@section ('title', __('labels.backend.donors.management') . ' | ' . __('labels.backend.donors.view'))

@section('breadcrumb-links')
@include('backend.donors.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.donors.management') }}
                        <small class="text-muted">{{ __('labels.backend.donors.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.donors.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.donors.content.created_at') }}:</strong> {{ $donor->updated_at->timezone(get_user_timezone()) }} ({{ $donor->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.donors.content.last_updated') }}:</strong> {{ $donor->created_at->timezone(get_user_timezone()) }} ({{$donor->updated_at->diffForHumans() }})--}}
                        @if ($donor->trashed())
                            <strong>{{ __('labels.backend.donors.content.deleted_at') }}:</strong> $donor->deleted_at->timezone(get_user_timezone())  ($donor->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection