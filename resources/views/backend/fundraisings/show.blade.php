@extends ('backend.layouts.app')

@section ('title', __('labels.backend.fundraisings.management') . ' | ' . __('labels.backend.fundraisings.view'))

@section('breadcrumb-links')
@include('backend.fundraisings.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.fundraisings.management') }}
                        <small class="text-muted">{{ __('labels.backend.fundraisings.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.fundraisings.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.fundraisings.content.created_at') }}:</strong> {{ $fundraising->updated_at->timezone(get_user_timezone()) }} ({{ $fundraising->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.fundraisings.content.last_updated') }}:</strong> {{ $fundraising->created_at->timezone(get_user_timezone()) }} ({{$fundraising->updated_at->diffForHumans() }})--}}
                        @if ($fundraising->trashed())
                            <strong>{{ __('labels.backend.fundraisings.content.deleted_at') }}:</strong> $fundraising->deleted_at->timezone(get_user_timezone())  ($fundraising->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection