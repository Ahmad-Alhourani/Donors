<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.countries.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $country->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.countries.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $country->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.countries.code'))->class('col-md-2 form-control-label')->for('code') }}
            <div class="col-md-10">
       

                {{ $country->code }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Citys'))->class('col-md-2 form-control-label')->for('cities') }}
            <div class="col-md-10">
                  @if  ( isset($country->cities)&&$country->cities->count())
                    @foreach($country->cities as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->