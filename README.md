## Installation

Simple install via Composer:

```
composer require linguistic/ngramextractor
```

## Usage

Coming soon.

## Example

```php
$tokenizer = new Tokenizer();
$tokenizer->addRemovalRule('/<\/?\w+[\s\w\=\"\/\#\-\:\.\_]*>/') # Removes HTML Tags
->addRemovalRule('/[^a-z0-9]+/', ' ') # Replaces everything which is not text with a space
->setSeperator('/\s+/'); # Tokenizes text with whitespace as delimiter
```

```php
$content = ""; # The text that should get tokenized
$stopwords = array(); # (optional) array of stopwords

$extractor = new NGramExtractor($content, $tokenizer, $stopwords);
$unigrams    = $extractor->getNGrams(1); # gets all n-grams in the text, n = 1

$unigramsFiltered    = NGramExtractor::limitByOccurance($extractor->getNGramCount(1, true), 3); # get unigrams and their occurance if the occurance is greater or equal 3
```
## Ressources

* [http://members.unine.ch/jacques.savoy/clef/index.html]{Download of stopword lists for different languages}
