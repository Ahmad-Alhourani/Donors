@extends ('backend.layouts.app')

@section ('title', __('labels.backend.orphan_sponsorships.management') . ' | ' . __('labels.backend.orphan_sponsorships.view'))

@section('breadcrumb-links')
@include('backend.orphan_sponsorships.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.orphan_sponsorships.management') }}
                        <small class="text-muted">{{ __('labels.backend.orphan_sponsorships.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.orphan_sponsorships.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.orphan_sponsorships.content.created_at') }}:</strong> {{ $orphan_sponsorship->updated_at->timezone(get_user_timezone()) }} ({{ $orphan_sponsorship->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.orphan_sponsorships.content.last_updated') }}:</strong> {{ $orphan_sponsorship->created_at->timezone(get_user_timezone()) }} ({{$orphan_sponsorship->updated_at->diffForHumans() }})--}}
                        @if ($orphan_sponsorship->trashed())
                            <strong>{{ __('labels.backend.orphan_sponsorships.content.deleted_at') }}:</strong> $orphan_sponsorship->deleted_at->timezone(get_user_timezone())  ($orphan_sponsorship->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection