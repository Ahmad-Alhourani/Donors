@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.cities.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.cities.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-4">
                    <form name="condition" action="" method="get">
                    {{--   <input type="text" name="search" placeholder="search">--}}
                    </form>
                </div><!--col-->

                <div class="col-sm-3 pull-right">
                    @include('backend.cities.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.cities.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $cities->total() !!} {{ trans_choice('labels.backend.cities.table.total', $cities->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $cities->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
