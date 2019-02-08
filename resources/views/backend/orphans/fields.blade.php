<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphans.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphans.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphans.f_name'))->class('col-md-2 form-control-label')->for('f_name') }}
            <div class="col-md-10">
                
                        {{ html()->text('f_name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphans.f_name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphans.m_name'))->class('col-md-2 form-control-label')->for('m_name') }}
            <div class="col-md-10">
                
                        {{ html()->text('m_name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphans.m_name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphans.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphans.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
              



    </div><!--col-->
</div><!--row-->