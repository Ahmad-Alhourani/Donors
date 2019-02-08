<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.fundraisings.table.name')) </th>
                
                  <th>@sortablelink('founded_at', trans('labels.backend.fundraisings.table.founded_at')) </th>
                
                 <th>{{ __('labels.backend.fundraisings.table.description') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fundraisings as $fundraising)
        <tr>
             
                <td>{{  $fundraising->name }}</td>  
                <td>{{  $fundraising->founded_at }}</td>  
                <td>{{  $fundraising->description }}</td>  
                

               <td>{!! $fundraising->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>