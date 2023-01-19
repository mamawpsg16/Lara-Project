<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

        if(request()->routeIs('users.store')){
            $password_rule =  'required|min:7|confirmed';
            $email_rule = 'required';
            $name_rule ='required';
            // $password_confirmation_rule = 'required';
        }else if(request()->routeIs('users.update')){
            // $password_rule =  'sometimes';
            // $email_rule = Rule::unique('users')->ignore($this->user->id);
            // $name_rule = Rule::unique('users')->ignore($this->user->id);
            // $password_confirmation_rule = 'sometimes';
        }
        return [
                'name' => ['required','min:5','max:100',$name_rule],
                'email' => $email_rule,
                'password' => $password_rule,
                // 'password_confirmation' => $password_confirmation_rule,
        ];
        
    }
}
