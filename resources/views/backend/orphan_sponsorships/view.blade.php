<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $orphan_sponsorship->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.donor_id'))->class('col-md-2 form-control-label')->for('donor_id') }}
            <div class="col-md-10">
       
           {{ $orphan_sponsorship->donor? $orphan_sponsorship->donor->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.orphan_id'))->class('col-md-2 form-control-label')->for('orphan_id') }}
            <div class="col-md-10">
       
           {{ $orphan_sponsorship->orphan? $orphan_sponsorship->orphan->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.value'))->class('col-md-2 form-control-label')->for('value') }}
            <div class="col-md-10">
       

                {{ $orphan_sponsorship->value }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.start_date'))->class('col-md-2 form-control-label')->for('start_date') }}
            <div class="col-md-10">
       

                {{ $orphan_sponsorship->start_date }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.expected_date'))->class('col-md-2 form-control-label')->for('expected_date') }}
            <div class="col-md-10">
       

                {{ $orphan_sponsorship->expected_date }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.orphan_sponsorships.end_date'))->class('col-md-2 form-control-label')->for('end_date') }}
            <div class="col-md-10">
       

                {{ $orphan_sponsorship->end_date }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->