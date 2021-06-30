<!DOCTYPE html>
<html>
<head>
<title>Launch Page: DCC Gibberish Text Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="launchPage/css/githubMCC.css"/> 
	<link rel="stylesheet" href="launchPage/css/bf_additions.css"/> 
	<link rel="stylesheet" href="launchPage/css/bf_additions2.css"/> 
	<link rel="stylesheet" href="launchPage/css/general.css"/> 
	<link rel="stylesheet" href="launchPage/css/basic_style.css"/> 
	<link rel="stylesheet" href="launchPage/css/dungeonText.css"/> 
	
	<script type="text/javascript" src="launchPage/js/characterMenu.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="launchPage/images/title.png" alt="DCC Gibberish Text Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The DCC Gibberish Text Generator is designed primarily with PHP.  The purpose of the Gibberish Text Generator is randomly generator blocks of gibberish text  (similar to a lorem ipson generator).  Mixed in gibberish words are key words from the Dungeon Crawl Classics game system.</p>

        <br/>
        <br/>
            
  

  
            
        <form action="" id ="gibberishForm"  target="_blank" method="post">
    
    <div class="content10">

                
  
                           
        <span class="formIputDescription">Paragraphs:</span>	
			  <select id="paragraphs" name="theParagraphs" class="textGenBox">	
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5" selected>5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>				
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
        </select>
        
        <br/>
        <br/>


            </div>
                
    
    
            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
            <br/>
            <br/>
            
				
            </div>
            
            </form>

    
                
                	
                <script>
        
                    
                    $("#generate_characters2").click(function(){
         
    
                   $("#gibberishForm").attr('action', "randomText/textGenerator.php");

                     });


     
                    
                </script>
        
                
    
                
    </section>


</body>
</html>