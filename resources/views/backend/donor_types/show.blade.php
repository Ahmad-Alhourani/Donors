@extends ('backend.layouts.app')

@section ('title', __('labels.backend.donor_types.management') . ' | ' . __('labels.backend.donor_types.view'))

@section('breadcrumb-links')
@include('backend.donor_types.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.donor_types.management') }}
                        <small class="text-muted">{{ __('labels.backend.donor_types.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.donor_types.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.donor_types.content.created_at') }}:</strong> {{ $donor_type->updated_at->timezone(get_user_timezone()) }} ({{ $donor_type->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.donor_types.content.last_updated') }}:</strong> {{ $donor_type->created_at->timezone(get_user_timezone()) }} ({{$donor_type->updated_at->diffForHumans() }})--}}
                        @if ($donor_type->trashed())
                            <strong>{{ __('labels.backend.donor_types.content.deleted_at') }}:</strong> $donor_type->deleted_at->timezone(get_user_timezone())  ($donor_type->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection