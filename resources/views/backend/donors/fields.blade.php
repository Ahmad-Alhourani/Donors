<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
                
                        {{ html()->text('image_file')
                          ->class('form-control-file')
                          ->type("file")
                            ->placeholder(__('validation.attributes.backend.donors.image'))
                       }}


                    @if (!empty($donor) && $donor->image)
                        <div>{!! html()->img($donor->image_url)->class('img-thumbnail')  !!}</div>
                    @endif


                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
                
                        {{ html()->text('l_name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.l_name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.address'))->class('col-md-2 form-control-label')->for('address') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('address')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.address'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.city_id'))->class('col-md-2 form-control-label')->for('city_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="city_id"  required  >
                         <option value="">select...</option>
                        @if  ($cities->count())
                        @foreach($cities as $temp)
                                <option value="{{ $temp->id }}" {{ isset($donor->city_id)&& $donor->city_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.mobile'))->class('col-md-2 form-control-label')->for('mobile') }}
            <div class="col-md-10">
                
                        {{ html()->text('mobile')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.mobile'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.phone1'))->class('col-md-2 form-control-label')->for('phone1') }}
            <div class="col-md-10">
                
                        {{ html()->text('phone1')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.phone1'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.phone2'))->class('col-md-2 form-control-label')->for('phone2') }}
            <div class="col-md-10">
                
                        {{ html()->text('phone2')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.phone2'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.is_orphan'))->class('col-md-2 form-control-label')->for('is_orphan') }}
            <div class="col-md-10">
                
                    <label class="switch switch-3d switch-primary">
                        {{ html()->checkbox('is_orphan', isset($donor->is_orphan) and $donor->is_orphan==1 ?true: false, 1)->class('switch-input') }}
                        <span class="switch-slider" data-checked="yes" data-unchecked="no" aria-selected="true"></span>
                    </label>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.notes'))->class('col-md-2 form-control-label')->for('notes') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('notes')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.donors.notes'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
                 



    </div><!--col-->
</div><!--row-->