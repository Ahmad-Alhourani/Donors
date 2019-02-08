<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.donor_id'))->class('col-md-2 form-control-label')->for('donor_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="donor_id"  required  >
                         <option value="">select...</option>
                        @if  ($donors->count())
                        @foreach($donors as $temp)
                                <option value="{{ $temp->id }}" {{ isset($donation->donor_id)&& $donation->donor_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.fundraising_id'))->class('col-md-2 form-control-label')->for('fundraising_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="fundraising_id"  required  >
                         <option value="">select...</option>
                        @if  ($fundraisings->count())
                        @foreach($fundraisings as $temp)
                                <option value="{{ $temp->id }}" {{ isset($donation->fundraising_id)&& $donation->fundraising_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.value'))->class('col-md-2 form-control-label')->for('value') }}
            <div class="col-md-10">
                
                    <input name="value" type="number" value="{{ isset($donation->value)?$donation->value: 0 }}" class="form-control" id="value"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->