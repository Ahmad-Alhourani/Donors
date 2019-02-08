<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.orphans.table.name')) </th>
                
                  <th>@sortablelink('f_name', trans('labels.backend.orphans.table.f_name')) </th>
                
                  <th>@sortablelink('m_name', trans('labels.backend.orphans.table.m_name')) </th>
                
                 <th>{{ __('labels.backend.orphans.table.description') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orphans as $orphan)
        <tr>
             
                <td>{{  $orphan->name }}</td>  
                <td>{{  $orphan->f_name }}</td>  
                <td>{{  $orphan->m_name }}</td>  
                <td>{{  $orphan->description }}</td>  
                

               <td>{!! $orphan->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>