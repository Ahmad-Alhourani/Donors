<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.fundraisings.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.fundraisings.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.fundraisings.founded_at'))->class('col-md-2 form-control-label')->for('founded_at') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($fundraising->founded_at)){
                                $current_date=$fundraising->founded_at->toDateString();
                                }

                            @endphp

                       {{ html()->date('founded_at',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.fundraisings.founded_at'))
                        
                        
                      
                            ->required() 
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.fundraisings.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.fundraisings.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
              



    </div><!--col-->
</div><!--row-->