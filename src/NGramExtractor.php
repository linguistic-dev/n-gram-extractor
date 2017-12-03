<?php

namespace linguistic\NGramExtractor;

use linguistic\NGramExtractor\Tokenizer;

class NGramExtractor
{
    /**
     * The origin text for ngram extraction
     *
     * @var string
     */
    protected $text;

    /**
     * List of ngrams, indexed by ngram-level
     *
     * @var array
     */
    protected $nGrams = array();

    /**
     * List of stopword tokens
     *
     * @var array
     */
    protected $stopwords = array();

    /**
     * Tokenizer instance
     *
     * @var Tokenizer
     */
    protected $tokenizer;

    /**
     * Creates a new NGramExtractor
     *
     * @param string $text              Text that gets processed
     * @param Tokenizer $tokenizer      A configured tokenizer object
     * @param array $stopwords          List of stopword tokens
     *
     * @return NGramExtractor
     */
    public function __construct($text, Tokenizer $tokenizer, $stopwords)
    {
        $this->text      = mb_strtolower($text);
        $this->stopwords = $stopwords;
        $this->tokenizer = $tokenizer;
    }

    /**
     * Get a list of all ngrams
     *
     * @param int $             Tevel of nGrams
     * @param bool $unique      Removes duplicates if set to true
     * @param bool $cleaned     Removes stopwords if set to true
     *
     * @return array
     */
    public function getNGram($n, $unique = true, $cleaned = true)
    {
        if (!array_key_exists($n, $this->nGrams)) {
            $token            = $this->getTokenizedText();
            $this->nGrams[$n] = self::createNGram($n, $token);
        }
        $nGrams = $this->nGrams[$n];
        if ($cleaned) {
            $nGrams = $this->getNGramClean($n);
        }
        if ($unique) {
            $nGrams = array_unique($nGrams);
        }
        return array_values($nGrams);
    }

    /**
     * Get a list of all ngrams reduced to their occurence
     *
     * @param int $n            level of ngrams
     * @param bool $cleaned     removes stopwords if set to true
     *
     * @return array
     */
    public function getNGramCount($n, $cleaned = true)
    {
        $nGrams = array();
        if ($cleaned) {
            $nGrams = $this->getNGram($n, false);
        } else {
            $nGrams = $this->getNGram($n, false, false);
        }
        $nGramCount = array_count_values($nGrams);
        arsort($nGramCount);
        return $nGramCount;
    }

    protected function getNGramClean($n)
    {
        $nGrams = $this->getTokenizedText();
        $token  = array_diff($nGrams, $this->stopwords);
        $nGrams = self::createNGram($n, array_values($token));
        return $nGrams;
    }

    /**
     * Creates the basic 1-grams, the single tokens of the text
     *
     * @return array
     */
    protected function getTokenizedText()
    {
        if (!array_key_exists(1, $this->nGrams)) {
            $this->nGrams[1] = $this->tokenizer->tokenize($this->text);
        }
        return $this->nGrams[1];
    }

    /**
     * Iterates over the single tokens and creates n-grams by a given level
     *
     * @static
     *
     * @param int $n            level of ngrams
     * @param array $token      the tokenized document for ngram generations
     *
     * @return array
     */
    protected static function createNGram($n, $token)
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
        return array_values($nGrams);
    }

    /**
     * Limits counted ngrams by minimum occurance
     *
     * @static
     *
     * @param array             Array with the ngrams and their occurance
     * @param int $min          Minimum occurace to pass filter
     *
     * @return array
     */
    public static function limitByOccurance($countedNGrams, $min)
    {
        $limited = array();
        foreach ($countedNGrams as $nGram => $occurance) {
            if ($occurance >= $min) {
                $limited[$nGram] = $occurance;
            }
        }
        arsort($limited);
        return $limited;
    }
}
