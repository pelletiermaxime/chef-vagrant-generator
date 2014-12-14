<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Http\Models;

class GeneratorRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Models\General::$rulesStore;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
