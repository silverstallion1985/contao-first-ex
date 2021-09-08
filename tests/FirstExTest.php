<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Xtengency\FirstEx\Tests;

use Xtengency\FirstEx\FirstExBundle;
use PHPUnit\Framework\TestCase;

class FirstExTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new FirstExBundle();

        $this->assertInstanceOf('Xtengency\FirstEx\FirstEx', $bundle);
    }
}
