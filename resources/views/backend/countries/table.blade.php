<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.countries.table.name')) </th>
                
                  <th>@sortablelink('code', trans('labels.backend.countries.table.code')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($countries as $country)
        <tr>
             
                <td>{{  $country->name }}</td>  
                <td>{{  $country->code }}</td>  
                

               <td>{!! $country->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>