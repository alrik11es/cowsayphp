<?php
namespace League\Cowsayphp\Test;

use League\Cowsayphp\Cow;

class CowTest extends \PHPUnit_Framework_TestCase
{
    public function cowDataProvider()
    {
        return array(
            array(
                "this is a text\nwith lines",
                "/ this is a text \\\n\ with lines     /"
            ),
            array(
                "this is a text",
                "< this is a text >"
            ),
            array(
                "this is a looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong line",
                "/ this is a                                                                \\\n".
                "| looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong |\n".
                "\ line                                                                     /"
            ),
            array(
                "short",
                "< short >"
            )
        );
    }

    /**
     * Testing speech bubbles
     * @dataProvider cowDataProvider
     */
    public function testSpeechBubble($text, $bubble)
    {
        $cow = new Cow();
        $message = $cow->getSpeechBubble($text);
        $this->assertEquals($message, $bubble);
    }

    /**
     * Testing simple cow
     * @dataProvider cowDataProvider
     */
    public function testSpeak($text, $bubble)
    {
        $testcow = <<<COW

{{bubble}}
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||

COW;
        $testcow = str_replace('{{bubble}}', $bubble, $testcow);
        $this->assertEquals($testcow, Cow::say($text));
    }
}
