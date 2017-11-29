<?php

use linguistic\NGramExtractor\NGramExtractor;
use linguistic\NGramExtractor\WordTokenizer;

class NGramExtractorTest extends \PHPUnit\Framework\TestCase
{

    private $extractor;

    public function setUp()
    {
        // set up WordTokenizer
        $tokenizer = new WordTokenizer();
        $tokenizer->setSeperator('/\s+/');
        // instantiate a extractor object
        $this->extractor = new NGramExtractor("abc abc def ghi jkl mno pqr");
        $this->extractor->setTokenizer($tokenizer);

        parent::setUp();
    }

    public function testGetNGram()
    {
        $expected_1 = array("abc", "abc", "def", "ghi", "jkl", "mno", "pqr");
        $expected_2 = array("abc abc", "abc def", "def ghi", "ghi jkl", "jkl mno", "mno pqr");
        $expected_3 = array("abc abc def", "abc def ghi", "def ghi jkl", "ghi jkl mno", "jkl mno pqr");
        self::assertEquals($expected_1, $this->extractor->getNGram(1));
        self::assertEquals($expected_2, $this->extractor->getNGram(2));
        self::assertEquals($expected_3, $this->extractor->getNGram(3));
    }

    public function testGetNGramUnique()
    {
        $expected = array("abc", "def", "ghi", "jkl", "mno", "pqr");
        self::assertEquals($expected, $this->extractor->getNGramUnique(1));
    }

    public function testGetNGramWordcount()
    {
        self::assertEquals(7, $this->extractor->getNGramWordcount(1));
        self::assertEquals(6, $this->extractor->getNGramWordcount(1, true));
        self::assertEquals(0, $this->extractor->getNGramWordcount(8));
    }

}
