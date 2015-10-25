<?php

/**
 * This file is part of plumphp/plum-markdown.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plum\PlumMarkdown;

use Michelf\Markdown;
use Michelf\MarkdownInterface;
use Plum\Plum\Converter\ConverterInterface;

/**
 * MarkdownConverter.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 */
class MarkdownConverter implements ConverterInterface
{
    /**
     * @var MarkdownInterface
     */
    private $markdown;

    /**
     * @param MarkdownInterface|null $markdown
     */
    public function __construct(MarkdownInterface $markdown = null)
    {
        if ($markdown === null) {
            $markdown = new Markdown();
        }
        $this->markdown = $markdown;
    }

    /**
     * @param string $item
     *
     * @return string
     */
    public function convert($item)
    {
        return $this->markdown->transform($item);
    }
}
