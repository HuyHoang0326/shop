<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        $currenAction = $this->route()->getActionMethod();
        // name method
        switch($this->method()):
            case'POST':
                switch($currenAction){
                    case 'add' :
                        $rules = [
                            'email'=>'required|unique:users',
                            'name'=>'required',
                            'password'=>'required'
                        ];
                        break;
                    default:
                        break;
                }
                break;
        endswitch;
        return $rules;
    }
    public function messages(){
        return [
            'email.required'=>'nhập email',
            'name.required'=>'nhập name'
        ];
    }
}
