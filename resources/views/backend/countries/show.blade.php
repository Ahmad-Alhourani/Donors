@extends ('backend.layouts.app')

@section ('title', __('labels.backend.countries.management') . ' | ' . __('labels.backend.countries.view'))

@section('breadcrumb-links')
@include('backend.countries.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.countries.management') }}
                        <small class="text-muted">{{ __('labels.backend.countries.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.countries.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.countries.content.created_at') }}:</strong> {{ $country->updated_at->timezone(get_user_timezone()) }} ({{ $country->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.countries.content.last_updated') }}:</strong> {{ $country->created_at->timezone(get_user_timezone()) }} ({{$country->updated_at->diffForHumans() }})--}}
                        @if ($country->trashed())
                            <strong>{{ __('labels.backend.countries.content.deleted_at') }}:</strong> $country->deleted_at->timezone(get_user_timezone())  ($country->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection