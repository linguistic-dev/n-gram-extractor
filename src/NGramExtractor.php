<?php

namespace linguistic\NGramExtractor;

use linguistic\NGramExtractor\TokenizerInterface;

class NGramExtractor
{
    private $text;
    private $nGrams    = array();
    private $stopwords = array();
    private $tokenizer;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function setStopwords(array $stopwords): NGramExtractor
    {
        $this->stopwords = $stopwords;
        return $this;
    }

    public function getStopwords(): array
    {
        return $this->stopwords;
    }

    public function setTokenizer(TokenizerInterface $tokenizer): NGramExtractor
    {
        $this->tokenizer = $tokenizer;
        return $this;
    }

    public function getNGram(int $n): array
    {
        if (!array_key_exists($n, $this->nGrams)) {
            $this->setNGram($n);
        }
        return $this->nGrams[$n];
    }

    public function getNGramUnique(int $n): array
    {
        $nGrams = $this->getNGram($n);
        $unique = array_unique($nGrams);
        return array_values($unique);
    }

    private function setNGram(int $n)
    {
        $nGrams  = array();
        $token   = $this->tokenizer->tokenize($this->text);
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
        $this->nGrams[$n] = $nGrams;
    }

    public function getNGramWordcount(int $n, bool $unique = false): int
    {
        if ($unique) {
            $nGrams = $this->getNGramUnique($n);
        } else {
            $nGrams = $this->getNGram($n);
        }
        return count($nGrams);
    }

    public function removeStopwords(array $tokens): array
    {
    }
}
