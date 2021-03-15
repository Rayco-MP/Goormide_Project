<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class dni implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //$dni = preg_match('@/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/@', $value);
		return preg_match('/(^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$)/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El campo DNI del chofer no es un dni valido.';
    }
}
