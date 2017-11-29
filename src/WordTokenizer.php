<?php

namespace linguistic\NGramExtractor;

class WordTokenizer implements TokenizerInterface
{
    protected $removalRules = array();
    protected $seperator;

    public function tokenize(string $text): array
    {
        foreach ($this->removalRules as $rule) {
            $text = preg_replace($rule, '', $text);
        }
        return preg_split($this->seperator, $text, null, PREG_SPLIT_NO_EMPTY);
    }

    public function addRemovalRule(string $rule): WordTokenizer
    {
        $this->removalRules[] = $rule;
        return $this;
    }

    public function getRemovalRules(): array
    {
        return $this->removalRules;
    }

    public function setSeperator(string $seperator): WordTokenizer
    {
        $this->seperator = $seperator;
        return $this;
    }
}
