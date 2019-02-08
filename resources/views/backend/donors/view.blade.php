<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $donor->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
       
               @if (!empty($donor) && $donor->image)
                    <div>{!! html()->img($donor->image_url)->class('img-thumbnail')  !!}</div>
                @else
                    <div>{!! html()->i()->class('fa fa-image fa-9x')  !!}</div>
               @endif
       </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $donor->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
       

                {{ $donor->l_name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.address'))->class('col-md-2 form-control-label')->for('address') }}
            <div class="col-md-10">
       

                {{ $donor->address }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.city_id'))->class('col-md-2 form-control-label')->for('city_id') }}
            <div class="col-md-10">
       
           {{ $donor->city? $donor->city->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.mobile'))->class('col-md-2 form-control-label')->for('mobile') }}
            <div class="col-md-10">
       

                {{ $donor->mobile }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.phone1'))->class('col-md-2 form-control-label')->for('phone1') }}
            <div class="col-md-10">
       

                {{ $donor->phone1 }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.phone2'))->class('col-md-2 form-control-label')->for('phone2') }}
            <div class="col-md-10">
       

                {{ $donor->phone2 }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.is_orphan'))->class('col-md-2 form-control-label')->for('is_orphan') }}
            <div class="col-md-10">
       

                {{ $donor->is_orphan }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.donors.notes'))->class('col-md-2 form-control-label')->for('notes') }}
            <div class="col-md-10">
       

                {{ $donor->notes }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Orphans'))->class('col-md-2 form-control-label')->for('orphans') }}
            <div class="col-md-10">
                @if  ( isset($donor->orphans)&&$donor->orphans->count())
                    @foreach($donor->orphans as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
           {{html()->label(__('Fundraisings'))->class('col-md-2 form-control-label')->for('fundraisings') }}
            <div class="col-md-10">
                @if  ( isset($donor->fundraisings)&&$donor->fundraisings->count())
                    @foreach($donor->fundraisings as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->