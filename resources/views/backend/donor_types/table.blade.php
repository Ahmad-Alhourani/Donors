<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.donor_types.table.name')) </th>
                
                 <th>{{ __('labels.backend.donor_types.table.details') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($donor_types as $donor_type)
        <tr>
             
                <td>{{  $donor_type->name }}</td>  
                <td>{{  $donor_type->details }}</td>  
                

               <td>{!! $donor_type->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>