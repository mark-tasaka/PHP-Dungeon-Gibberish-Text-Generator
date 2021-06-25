<!DOCTYPE html>
<html>
<head>
<title>DCC Random Text Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Random Text Generator..">
	<meta name="keywords" content="Dungeon Crawl Classics,,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/randomTextGen.css">
    
    
    
    
</head>
<body>

<?php

include 'php/textFunctions.php';


if(isset($_POST["theParagraphs"]))
{
    $numberOfParagraphs = $_POST["theParagraphs"];

}
/*
$word = array();
$word = getWord();
$sentence = implode($word);*/

//$sentence = getSentence();
//$paragraph = getParagraph();

$textBlock = array();
$textBlock = getRandomText($numberOfParagraphs);

?>



<img id="title"/>
   <section>

   
<span id="textBlock">
<?php

foreach($textBlock as $text)
{
    echo $text . '<br/><br/>';
}


?>
</span>
           


<script>
      

      let imgData = "images/title.png";
     
       $("#title").attr("src", imgData);
     

 </script>

</body>
</html>