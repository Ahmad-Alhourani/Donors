<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('donor.name', trans('labels.backend.orphan_sponsorships.table.donor_id')) </th>
                
                 <th>@sortablelink('orphan.name', trans('labels.backend.orphan_sponsorships.table.orphan_id')) </th>
                
                  <th>@sortablelink('value', trans('labels.backend.orphan_sponsorships.table.value')) </th>
                
                  <th>@sortablelink('start_date', trans('labels.backend.orphan_sponsorships.table.start_date')) </th>
                
                  <th>@sortablelink('expected_date', trans('labels.backend.orphan_sponsorships.table.expected_date')) </th>
                
                  <th>@sortablelink('end_date', trans('labels.backend.orphan_sponsorships.table.end_date')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orphan_sponsorships as $orphan_sponsorship)
        <tr>
             
                <td>{!! $orphan_sponsorship->donor? $orphan_sponsorship->donor->name : 'N/A' !!}</td> 
                <td>{!! $orphan_sponsorship->orphan? $orphan_sponsorship->orphan->name : 'N/A' !!}</td> 
                <td>{{  $orphan_sponsorship->value }}</td>  
                <td>{{  $orphan_sponsorship->start_date }}</td>  
                <td>{{  $orphan_sponsorship->expected_date }}</td>  
                <td>{{  $orphan_sponsorship->end_date }}</td>  
                

               <td>{!! $orphan_sponsorship->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>