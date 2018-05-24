<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Factory\Config;

use Liip\ImagineBundle\Config\Filter;

class FilterFactory
{
    /**
     * @param string $name
     * @param array $options
     * @return Filter
     */
    public function create(string $name, array $options)
    {
        return new Filter($name, $options);
    }
}
