<?php

function getWord()
{
    $lowerCase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w'. 'x', 'y', 'z');

    $wordSize = rand(3, 10);
    $word = array();

    for($i = 0; $i < $wordSize; ++$i)
    {
        $alphabetLowerCase = rand(0, count($lowerCase)-1);

        $letter = $lowerCase[$alphabetLowerCase];

        array_push($word, $letter);
    }

    return $word;

}

function getSentence()
{
    $wordsNumber = rand(12, 22);

    $sentence = array();

    for($i = 0; $i < $wordsNumber; ++$i)
    {
        $word = array();
        $word = getWord();

        array_push($sentence, $word);

        if($i < $wordsNumber-1)
        {
            array_push($sentence, ' ');
        }
        else
        {
            array_push($sentence, '.');
        }
    }

    return $sentence;
}

?>