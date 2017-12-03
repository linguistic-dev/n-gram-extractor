<?php

namespace linguistic\NGramExtractor;

class Tokenizer
{
    /**
     * Container for removal rules
     *
     * @var array
     */
    protected $removalRules = array(
        "search"  => array(),
        "replace" => array(),
    );

    /**
     * Regex string that seperates a preprocessed text
     *
     * @var string
     */
    protected $seperator = "";

    /**
     * Applies the rule sets and creates token from a text
     *
     * @param string $text      Text that gets tokenized
     *
     * @return array
     */
    public function tokenize($text)
    {
        $text = preg_replace($this->removalRules['search'], $this->removalRules['replace'], $text);
        return preg_split($this->seperator, $text, null, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Adds a removal regex for the text to the rules container
     *
     * @param string $rule          Regex for replace selection
     * @param string $replace       Regex for replacement
     *
     * @return $this
     */
    public function addRemovalRule($rule, $replace = '')
    {
        $this->removalRules["search"][]  = $rule;
        $this->removalRules["replace"][] = $replace;
        return $this;
    }

    /**
     * Sets the regex seperator, that gets used for splitting the preprocessed text
     *
     * @param string $seperator     Regex for seperator
     *
     * @return $this
     */
    public function setSeperator($seperator)
    {
        $this->seperator = $seperator;
        return $this;
    }
}
