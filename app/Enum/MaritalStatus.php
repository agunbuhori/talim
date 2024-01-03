<?php

namespace App\Enum;

enum MaritalStatus
{
    use ArrayEnum;

    const MARRIED = 'MARRIED';
    const SINGLE = 'SINGLE';
    const SEPARATED = 'SEPARATED';
}
