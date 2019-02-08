<?php
namespace App\Http\Requests\Backend\Donor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class CreateDonor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.donor.edit', $this->donor);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'id' => 'None',

            'image_file' => 'nullable',

            'name' => 'required',

            'l_name' => 'required',

            'address' => 'required',

            'city_id' => 'required',

            'mobile' => 'required',

            'phone1' => 'nullable',

            'phone2' => 'nullable',

            'is_orphan' => 'nullable',

            'notes' => 'nullable'
        ];
    }
}
