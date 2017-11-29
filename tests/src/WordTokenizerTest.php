<?php

use linguistic\NGramExtractor\WordTokenizer;

class WordTokenizerTest extends \PHPUnit\Framework\TestCase
{

    private $tokenizer;
    private $testText = "abc def ghix";

    public function setUp()
    {
        // instantiate a creator object
        $this->tokenizer = new WordTokenizer();

        //some basic removal rule for test usage, should remove the 'x' char
        $this->tokenizer->addRemovalRule('/x/');

        parent::setUp();
    }

    public function testSetRemovalRules()
    {
        self::assertEquals(1, count($this->tokenizer->getRemovalRules()));
    }

    public function testTokenize()
    {
        $expected = array("abc", "def", "ghi");
        $this->tokenizer->setSeperator('/\s/');
        $tokenized = $this->tokenizer->tokenize($this->testText);
        self::assertEquals($expected, $tokenized);
    }
}
