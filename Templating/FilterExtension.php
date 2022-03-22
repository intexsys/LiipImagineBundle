<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Templating;

class FilterExtension extends \Twig_Extension
{
    use FilterTrait;

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('imagine_filter', [$this, 'filter']),
            new \Twig_SimpleFilter('imagine_resolve', [$this, 'resolve']),
        ];
    }

    /**
     * Gets target browser path for the image and filter to apply.
     *
     * @param string      $path
     * @param string      $filter
     * @param string|null $resolver
     *
     * @return string
     */
    public function resolve($path, $filter, $resolver = null)
    {
        return $this->cache->resolve($path, $filter, $resolver);
    }
}
