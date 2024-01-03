<?php

namespace App\Enum;

enum IdentityType
{
    use ArrayEnum;

    const KTP = 'KTP';
    const SIM = 'SIM';
    const PASPOR = 'PASPOR';
    const PELAJAR = 'PELAJAR';
}
