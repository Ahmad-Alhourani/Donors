@extends ('backend.layouts.app')

@section ('title', __('labels.backend.orphans.management') . ' | ' . __('labels.backend.orphans.view'))

@section('breadcrumb-links')
@include('backend.orphans.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.orphans.management') }}
                        <small class="text-muted">{{ __('labels.backend.orphans.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.orphans.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.orphans.content.created_at') }}:</strong> {{ $orphan->updated_at->timezone(get_user_timezone()) }} ({{ $orphan->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.orphans.content.last_updated') }}:</strong> {{ $orphan->created_at->timezone(get_user_timezone()) }} ({{$orphan->updated_at->diffForHumans() }})--}}
                        @if ($orphan->trashed())
                            <strong>{{ __('labels.backend.orphans.content.deleted_at') }}:</strong> $orphan->deleted_at->timezone(get_user_timezone())  ($orphan->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection