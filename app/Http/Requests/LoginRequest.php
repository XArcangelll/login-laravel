<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required',
            'password'=>'required'
        ];
    }

    public function getCredentials(){
        $username = $this->get('username');

        if($this->isEmail($username)){
            return [
                "email"=>$username,
                "password"=>$this->get('password')
            ];
        }

        return $this->only('username','password');
    }

    public function isEmail($value){
        //construir una validacion basado en una clase especifica
           $factory = $this->container->make(ValidationFactory::class);
        //esto devuelve un objeto de tipo validator y tiene un metodo fails
        return !$factory->make(["username"=>$value],["username"=>"email"])->fails() ;

     }
}
