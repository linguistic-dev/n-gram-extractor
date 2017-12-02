<?php

namespace linguistic\NGramExtractor;

class Tokenizer
{
    protected $removalRules = array();
    protected $seperator;

    public function tokenize($text)
    {
        foreach ($this->removalRules as $rule) {
            $text = preg_replace($rule, ' ', $text);
        }
        return preg_split($this->seperator, $text, null, PREG_SPLIT_NO_EMPTY);
    }

    public function addRemovalRule($rule)
    {
        $this->removalRules[] = $rule;
        return $this;
    }

    public function getRemovalRules()
    {
        return $this->removalRules;
    }

    public function setSeperator($seperator)
    {
        $this->seperator = $seperator;
        return $this;
    }
}
