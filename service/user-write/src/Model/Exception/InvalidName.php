<?php
/**
 * This file is part of the prooph/micro-do.
 * (c) 2016-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\MicroDo\UserWrite\Model\Exception;

final class InvalidName extends \InvalidArgumentException
{
    public static function reason(string $msg): InvalidName
    {
        return new self('Invalid user name because ' . $msg);
    }
}
