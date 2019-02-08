@extends ('backend.layouts.app')

@section ('title', __('labels.backend.cities.management') . ' | ' . __('labels.backend.cities.view'))

@section('breadcrumb-links')
@include('backend.cities.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.cities.management') }}
                        <small class="text-muted">{{ __('labels.backend.cities.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.cities.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.cities.content.created_at') }}:</strong> {{ $city->updated_at->timezone(get_user_timezone()) }} ({{ $city->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.cities.content.last_updated') }}:</strong> {{ $city->created_at->timezone(get_user_timezone()) }} ({{$city->updated_at->diffForHumans() }})--}}
                        @if ($city->trashed())
                            <strong>{{ __('labels.backend.cities.content.deleted_at') }}:</strong> $city->deleted_at->timezone(get_user_timezone())  ($city->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection