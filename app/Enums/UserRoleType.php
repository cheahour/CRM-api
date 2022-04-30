<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRoleType extends Enum
{
    const HeadSale = "Head-sale";
    const SaleAdmin = "Sale-admin";
    const DSM = "DSM";
    const Sale = "Sale";
}
