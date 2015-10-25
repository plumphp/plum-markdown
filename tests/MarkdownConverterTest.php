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

use Mockery;
use PHPUnit_Framework_TestCase;

/**
 * MarkdownConverterTest.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class MarkdownConverterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Plum\PlumMarkdown\MarkdownConverter::__construct()
     * @covers Plum\PlumMarkdown\MarkdownConverter::convert()
     */
    public function convertTransformsMarkdownIntoHTML()
    {
        $markdown = Mockery::mock('Michelf\MarkdownInterface');
        $markdown->shouldReceive('transform')->with('*foobar*')->once()->andReturn('<p><em>foobar</em></p>');
        $converter = new MarkdownConverter($markdown);

        $this->assertSame('<p><em>foobar</em></p>', $converter->convert('*foobar*'));
    }

    /**
     * @test
     * @covers Plum\PlumMarkdown\MarkdownConverter::__construct()
     * @covers Plum\PlumMarkdown\MarkdownConverter::convert()
     */
    public function constructCreatesMarkdownIfNoneProvided()
    {
        $converter = new MarkdownConverter();

        $this->assertStringStartsWith('<p><em>foobar</em></p>', $converter->convert('*foobar*'));
    }
}
