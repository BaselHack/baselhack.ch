<?php

namespace App\Domain\Rules;

use Illuminate\Contracts\Validation\Rule;

class UniqueParticipants implements Rule
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
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */

    /** @todo Create Rule */
    public function message()
    {
        return 'You\'r already signed-up for the event.';
    }
}
