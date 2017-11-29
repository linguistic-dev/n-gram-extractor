<?php

namespace linguistic\NGramExtractor;

interface TokenizerInterface
{
    public function tokenize(string $text);
    public function addRemovalRule(string $rule);
    public function getRemovalRules();
    public function setSeperator(string $seperator);
}
