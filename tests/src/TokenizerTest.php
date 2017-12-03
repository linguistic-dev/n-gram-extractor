<?php

use linguistic\NGramExtractor\Tokenizer;

class TokenizerTest extends \PHPUnit\Framework\TestCase
{

    private $tokenizer;
    private $testText = "abc def ghix";

    public function setUp()
    {
        // instantiate a creator object
        $this->tokenizer = new Tokenizer();

        //some basic removal rule for test usage, should remove the 'x' char
        $this->tokenizer->addRemovalRule('/x/')
            ->setSeperator('/\s/');

        parent::setUp();
    }

    public function testTokenize()
    {
        $expected = array("abc", "def", "ghi");
        self::assertEquals($expected, $this->tokenizer->tokenize($this->testText));

        $this->tokenizer->addRemovalRule('/abc/', 'xyz');
        $this->tokenizer->addRemovalRule('/(def)/', '$0g');

        $expected_2 = array("xyz", "defg", "ghi");
        self::assertEquals($expected_2, $this->tokenizer->tokenize($this->testText));

    }
}
