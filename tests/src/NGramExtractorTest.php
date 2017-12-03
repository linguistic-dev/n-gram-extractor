<?php

use linguistic\NGramExtractor\NGramExtractor;
use linguistic\NGramExtractor\Tokenizer;

class NGramExtractorTest extends \PHPUnit\Framework\TestCase
{

    private $extractor;

    public function setUp()
    {
        // set up WordTokenizer
        $tokenizer = new Tokenizer();
        $tokenizer->setSeperator('/\s+/');
        // instantiate a extractor object
        $this->extractor = new NGramExtractor("abc abc def ghi jkl mno pqr", $tokenizer, array('def'));
        parent::setUp();
    }

    public function testGetNGram()
    {
        $expected_1 = array("abc", "abc", "def", "ghi", "jkl", "mno", "pqr");
        $expected_2 = array("abc abc", "abc def", "def ghi", "ghi jkl", "jkl mno", "mno pqr");
        $expected_3 = array("abc abc def", "abc def ghi", "def ghi jkl", "ghi jkl mno", "jkl mno pqr");
        self::assertEquals($expected_1, $this->extractor->getNGram(1, false, false));
        self::assertEquals($expected_2, $this->extractor->getNGram(2, false, false));
        self::assertEquals($expected_3, $this->extractor->getNGram(3, false, false));

        $expected_4 = array("abc", "abc", "ghi", "jkl", "mno", "pqr");
        self::assertEquals($expected_4, $this->extractor->getNGram(1, false));

        $expected_5 = array("abc", "ghi", "jkl", "mno", "pqr");
        self::assertEquals($expected_5, $this->extractor->getNGram(1));

        $expected_6 = array("abc", "def", "ghi", "jkl", "mno", "pqr");
        self::assertEquals($expected_6, $this->extractor->getNGram(1, true, false));
    }

    public function testGetNGramCount()
    {
        self::assertTrue(true);
        $expected_1 = array("abc" => 2, "ghi" => 1, "jkl" => 1, "mno" => 1, "pqr" => 1);
        self::assertEquals($expected_1, $this->extractor->getNGramCount(1));

        $expected_2 = array("abc" => 2, "def" => 1, "ghi" => 1, "jkl" => 1, "mno" => 1, "pqr" => 1);
        self::assertEquals($expected_2, $this->extractor->getNGramCount(1, false));

        $expected_3 = array("abc abc" => 1, "abc def" => 1, "def ghi" => 1, "ghi jkl" => 1, "jkl mno" => 1, "mno pqr" => 1);
        self::assertEquals($expected_3, $this->extractor->getNGramCount(2, false));

        $expected_3 = array("abc abc" => 1, "abc ghi" => 1, "ghi jkl" => 1, "jkl mno" => 1, "mno pqr" => 1);
        self::assertEquals($expected_3, $this->extractor->getNGramCount(2));
    }

    public function testLimitByOccurance()
    {
        self::assertEquals(1, count(NGramExtractor::limitByOccurance($this->extractor->getNGramCount(1), 2)));
        self::assertEquals(5, count(NGramExtractor::limitByOccurance($this->extractor->getNGramCount(2), 1)));
    }
}
