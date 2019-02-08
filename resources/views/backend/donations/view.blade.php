<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $donation->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.donor_id'))->class('col-md-2 form-control-label')->for('donor_id') }}
            <div class="col-md-10">
       
           {{ $donation->donor? $donation->donor->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.fundraising_id'))->class('col-md-2 form-control-label')->for('fundraising_id') }}
            <div class="col-md-10">
       
           {{ $donation->fundraising? $donation->fundraising->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donations.value'))->class('col-md-2 form-control-label')->for('value') }}
            <div class="col-md-10">
       

                {{ $donation->value }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->