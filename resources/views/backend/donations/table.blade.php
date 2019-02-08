<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('donor.name', trans('labels.backend.donations.table.donor_id')) </th>
                
                 <th>@sortablelink('fundraising.name', trans('labels.backend.donations.table.fundraising_id')) </th>
                
                  <th>@sortablelink('value', trans('labels.backend.donations.table.value')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($donations as $donation)
        <tr>
             
                <td>{!! $donation->donor? $donation->donor->name : 'N/A' !!}</td> 
                <td>{!! $donation->fundraising? $donation->fundraising->name : 'N/A' !!}</td> 
                <td>{{  $donation->value }}</td>  
                

               <td>{!! $donation->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>