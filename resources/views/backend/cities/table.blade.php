<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('country.name', trans('labels.backend.cities.table.country_id')) </th>
                
                  <th>@sortablelink('name', trans('labels.backend.cities.table.name')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cities as $city)
        <tr>
             
                <td>{!! $city->country? $city->country->name : 'N/A' !!}</td> 
                <td>{{  $city->name }}</td>  
                

               <td>{!! $city->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>