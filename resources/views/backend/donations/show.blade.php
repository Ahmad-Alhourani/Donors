@extends ('backend.layouts.app')

@section ('title', __('labels.backend.donations.management') . ' | ' . __('labels.backend.donations.view'))

@section('breadcrumb-links')
@include('backend.donations.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.donations.management') }}
                        <small class="text-muted">{{ __('labels.backend.donations.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.donations.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.donations.content.created_at') }}:</strong> {{ $donation->updated_at->timezone(get_user_timezone()) }} ({{ $donation->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.donations.content.last_updated') }}:</strong> {{ $donation->created_at->timezone(get_user_timezone()) }} ({{$donation->updated_at->diffForHumans() }})--}}
                        @if ($donation->trashed())
                            <strong>{{ __('labels.backend.donations.content.deleted_at') }}:</strong> $donation->deleted_at->timezone(get_user_timezone())  ($donation->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection