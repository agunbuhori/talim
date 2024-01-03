<?php

namespace App\Http\Requests\Public;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserRegisterRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('users', 'email'),
            ],
            'password' => 'required|max:100',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'email' => strtolower($this->email),
            'password' => Hash::make($this->password)
        ]);
    }

    /**
     * Register action
     * 
     * @return void
     */
    public function register()
    {
        $data = $this->validated();

        $user = User::create($data);

        return $user;
    }
}
