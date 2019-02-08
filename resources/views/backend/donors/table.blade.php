<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>{{ __('labels.backend.donors.table.image') }}</th>
                
                  <th>@sortablelink('name', trans('labels.backend.donors.table.name')) </th>
                
                  <th>@sortablelink('l_name', trans('labels.backend.donors.table.l_name')) </th>
                
                 <th>{{ __('labels.backend.donors.table.address') }}</th>
                
                 <th>@sortablelink('city.name', trans('labels.backend.donors.table.city_id')) </th>
                
                 <th>{{ __('labels.backend.donors.table.is_orphan') }}</th>
                
                <th>{{ __('Orphans') }}</th>
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($donors as $donor)
        <tr>
             
                <td style="width:30px">
                    @if (!empty($donor) && $donor->image)
                       {!! html()->img($donor->image_url)->class('img-fluid')  !!}
                   @else
                       {!! html()->i()->class('fa fa-image fa-3x')  !!}
                   @endif
               </td> 
                <td>{{  $donor->name }}</td>  
                <td>{{  $donor->l_name }}</td>  
                <td>{{  $donor->address }}</td>  
                <td>{!! $donor->city? $donor->city->name : 'N/A' !!}</td>    
                <td>{{  $donor->is_orphan }}</td>   
                
                <td>@foreach ($donor->orphans as $item){{$item['name']}} , @endforeach</td>

               <td>{!! $donor->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>