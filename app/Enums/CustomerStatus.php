<?php
/**
 * User: Zura
 * Date: 9/17/2022
 * Time: 6:34 AM
 */

namespace App\Enums;


/**
 * Class CustomerStatus
 *
 * @author  Mohmmad Taimoor Hussain <taimoorhussain79@outlook.com>
 * @package App\Enums
 */
enum CustomerStatus: string
{
    case Active = 'active';
    case Disabled = 'disabled';
}
