<?php

namespace linguistic\NGramExtractor;

use linguistic\NGramExtractor\Tokenizer;

class NGramExtractor
{
    private $text;
    private $tokenizedText;
    private $nGrams      = array();
    private $nGramsClean = array();
    private $stopwords   = array();
    private $tokenizer;

    public function __construct($text)
    {
        $this->text = mb_strtolower($text);
    }

    public function setStopwords($stopwords)
    {
        $this->stopwords = $stopwords;
        return $this;
    }

    public function getStopwords()
    {
        return $this->stopwords;
    }

    public function setTokenizer(Tokenizer $tokenizer)
    {
        $this->tokenizer = $tokenizer;
        return $this;
    }

    public function getNGram($n)
    {
        if (!array_key_exists($n, $this->nGrams)) {
            $token            = $this->getTokenizedText();
            $this->nGrams[$n] = $this->createNGram($n, $token);
        }
        return $this->nGrams[$n];
    }

    public function getNGramClean($n)
    {
        if (!array_key_exists($n, $this->nGramsClean)) {
            $token                 = $this->getTokenizedText();
            $cleaned               = array_values(array_diff($token, $this->stopwords));
            $this->nGramsClean[$n] = $this->createNGram($n, $cleaned);
        }
        return $this->nGramsClean[$n];
    }

    public function getNGramUnique($n)
    {
        $nGrams = $this->getNGram($n);
        $unique = array_unique($nGrams);
        return array_values($unique);
    }

    public function getNGramUniqueWithCount($n)
    {
        // echo "halli hallo";
        $nGrams        = $this->getNGram($n);
        $nGramsCounted = array_count_values($nGrams);
        arsort($nGramsCounted);
        return $nGramsCounted;
    }

    public function getNGramUniqueWithCountClean($n)
    {
        $nGrams        = $this->getNGramClean($n);
        $nGramsCounted = array_count_values($nGrams);
        arsort($nGramsCounted);
        return $nGramsCounted;
    }

    public function getTokenizedText()
    {
        if (!$this->tokenizedText) {
            $this->tokenizedText = $this->tokenizer->tokenize($this->text);
        }
        return $this->tokenizedText;
    }

    private function createNGram($n, $token)
    {
        $nGrams  = array();
        $counter = 0;
        while (($counter + ($n - 1)) < count($token)) {
            $nGram = "";
            for ($i = 0; $i < $n; $i++) {
                $nGram .= $token[$counter + $i];
                if ($i != $n - 1) {
                    $nGram .= " ";
                }
            }
            $nGrams[] = $nGram;
            $counter++;
        }
        return $nGrams;
    }

    public function getNGramWordcount($n, $unique = false)
    {
        if ($unique) {
            return count($this->getNGramUnique($n));
        }
        return count($this->getNGram($n));
    }
}
