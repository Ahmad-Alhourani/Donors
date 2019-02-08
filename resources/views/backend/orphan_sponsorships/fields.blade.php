<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.donor_id'))->class('col-md-2 form-control-label')->for('donor_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="donor_id"  required  >
                         <option value="">select...</option>
                        @if  ($donors->count())
                        @foreach($donors as $temp)
                                <option value="{{ $temp->id }}" {{ isset($orphan_sponsorship->donor_id)&& $orphan_sponsorship->donor_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.orphan_id'))->class('col-md-2 form-control-label')->for('orphan_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="orphan_id"  required  >
                         <option value="">select...</option>
                        @if  ($orphans->count())
                        @foreach($orphans as $temp)
                                <option value="{{ $temp->id }}" {{ isset($orphan_sponsorship->orphan_id)&& $orphan_sponsorship->orphan_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.value'))->class('col-md-2 form-control-label')->for('value') }}
            <div class="col-md-10">
                
                    <input name="value" type="number" value="{{ isset($orphan_sponsorship->value)?$orphan_sponsorship->value: 0 }}" class="form-control" id="value"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.start_date'))->class('col-md-2 form-control-label')->for('start_date') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($orphan_sponsorship->start_date)){
                                $current_date=$orphan_sponsorship->start_date->toDateString();
                                }

                            @endphp

                       {{ html()->date('start_date',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphan_sponsorships.start_date'))
                        
                        
                      
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.expected_date'))->class('col-md-2 form-control-label')->for('expected_date') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($orphan_sponsorship->expected_date)){
                                $current_date=$orphan_sponsorship->expected_date->toDateString();
                                }

                            @endphp

                       {{ html()->date('expected_date',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphan_sponsorships.expected_date'))
                        
                        
                      
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.end_date'))->class('col-md-2 form-control-label')->for('end_date') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($orphan_sponsorship->end_date)){
                                $current_date=$orphan_sponsorship->end_date->toDateString();
                                }

                            @endphp

                       {{ html()->date('end_date',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.orphan_sponsorships.end_date'))
                        
                        
                      
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->