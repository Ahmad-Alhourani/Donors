<?php
namespace App\Http\Requests\Backend\OrphanSponsorship;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class CreateOrphanSponsorship extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.orphan_sponsorship.edit', $this->orphansponsorship);
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

            'donor_id' => 'required',

            'orphan_id' => 'required',

            'value' => 'required',

            'start_date' => 'nullable',

            'expected_date' => 'nullable',

            'end_date' => 'nullable'
        ];
    }
}
