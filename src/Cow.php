<?php

namespace League\Cowsayphp;

class Cow
{
    /**
     * The fantastic cow string
     */
    const COW = <<<DOC

{{bubble}}
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||

DOC;

    /**
     * Make the cow speak from static context.
     * @param $text string A string you want the cow says
     * @return string The cow speaks...
     */
    public static function say($text)
    {
        $cow = new self();
        return $cow->speak($text);
    }

    /**
     * Make the cow speak.
     * @param $text string A string you want the cow says
     * @return string The cow speaks...
     */
    public function speak($text)
    {
        $message = $this->getSpeechBubble($text);
        $cow = str_replace('{{bubble}}', $message, self::COW);
        return $cow;
    }

    /**
     * Obtain the message as array wrapping the text
     * @param $text
     * @return array
     */
    public function getMessageLines($text)
    {
        $message = $text;
        $wrapLength = 40;
        // wrap the message to max chars
        $message = wordwrap($message, $wrapLength - 2);
        // split into array of lines
        return explode("\n", $message);
    }

    /**
     * Find the longest line and get the line length
     * @param array $lines
     * @return int
     */
    public function getMaxLineLength(array $lines)
    {
        $lineLength = 0;
        // find the longest line
        foreach ($lines as $line) {
            $currentLineLength = strlen($line);
            if ($currentLineLength > $lineLength) {
                $lineLength = $currentLineLength;
            }
        }
        return $lineLength;
    }

    /**
     * Obtain the speech bubble.
     * @param $text
     * @return string
     */
    public function getSpeechBubble($text)
    {
        $lines = $this->getMessageLines($text);
        $lineLength = $this->getMaxLineLength($lines);
        $text = '';
        $numberOfLines = count($lines);
        $firstLine = str_pad(array_shift($lines), $lineLength);
        if ($numberOfLines === 1) {
            $text = "< {$firstLine} >";
        } else {
            $lastLine = str_pad(array_pop($lines), $lineLength);
            $text = "/ {$firstLine} \\\n";
            foreach ($lines as $line) {
                $line = str_pad($line, $lineLength);
                $text .= "| {$line} |\n";
            }
            $text .= "\\ {$lastLine} /";
        }
        return $text;
    }
}