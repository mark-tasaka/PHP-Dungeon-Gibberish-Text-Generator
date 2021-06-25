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

    $word2 = implode($word);

    return $word2;

}

function getSentence()
{
    $wordsNumber = rand(6, 20);

    $sentence = array();

    for($i = 0; $i < $wordsNumber; ++$i)
    {
        $word = getWord();

        if($i == 0)
        {
            $word = ucfirst($word);
        }

        array_push($sentence, $word);

        if($i < $wordsNumber-1)
        {
            array_push($sentence, ' ');
        }
        else
        {
            array_push($sentence, '. ');
        }
    }

    $sentence2 = implode($sentence);

    return $sentence2;
}


function getParagraph()
{
    $numSentences = rand(3, 8);

    $paragraph = array();

    for($i = 0; $i < $numSentences; ++$i)
    {
        $sentence = getSentence();
        
        array_push($paragraph, $sentence);
        array_push($paragraph, '&nbsp;');
    }

    $paragraph2 = implode($paragraph);

    return $paragraph2;
}


function getRandomText($select)
{
    $numPara = intval($select);
    $textBlock = array();

    for($i = 0; $i < $numPara; ++$i)
    {
        $paragraph = getParagraph();

        array_push($textBlock, $paragraph);

    }

    return $textBlock;

}
?>