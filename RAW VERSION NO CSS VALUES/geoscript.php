<?php
// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM

// BY PHP NINJA JEFF CHILDERS

// RAW SIMPLE VERSION RANDOM ARTICLE REMOVED - ALL CSS VALUES REMOVED 


//     THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
// ###################################################     // ###################################################
// ###################################################    // ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################    // ###################################################
//      THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 


//   SETTINGS
// #############
// XXXXXXXXXXXXX
// #############

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('max_execution_time', 259200);
set_time_limit(0);
ob_implicit_flush(true);

//   START
// ##########
// XXXXXXXXXX
// ##########
 
 ob_start();


// SCRIPT NOW ENGAUGED 


// TURBO PHP = ON = FORCE_PHP_FAST_RATE_TURBO_ENGAUGED


//  GET TEMPLATE DATA = GET LOGIC = PASS HTACCESS VARABLES
// ####################
// XXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXX
// ####################

$template_data = file_get_contents(".template.1-city.html");
$state = $_GET['state']; 
$city = $_GET['city']; 
 



// END GET TEMPLATE DATA







// EXAMPLE SPINTAX: {Boy|Girl|Dog|Cat|Cow|Man|Lizard|Bug|Car|Hacker|Turtle}  




// ALSO, SPIN AND RANDOMIZE HTML, SPIN AND RANDOMIZE SENTENCES, SPIN AND RANDOMIZE IMAGES, SPIN AND RANDOMIZE VIDEOS, SPIN AND RANDOMIZE TEXT, SPIN AND RANDOMIZE JAVASCRIPT CODE etc....



// IN ORDER FOR THIS TO WORK ALL SPINTAX CONTENT MUST BE BETWEEN THESE TWO TAGS:  <spin>   </spin>

//   SPINTAX CODE
// ###############
// XXXXXXXXXXXXXXX
// ###############

function spin($str){
$tmp = explode("<spin>",$str);
$pos = strpos($str, '<spin>');
if ($pos !== false) {
for($i=0;$i<count($tmp);$i++){
$pos = strpos($tmp[$i], '</spin>');
if ($pos !== false) {
unset($temp);
$temp = explode("</spin>",$tmp[$i]);
$temp[0] = spinin($temp[0]);
$tmp[$i] = implode($temp);
}
}
return implode('',$tmp);
}else{
return $str;
}
}
function spinin($s){
preg_match('#\{(.+?)\}#is',$s,$m);
if(empty($m)) return $s;
$t = $m[1];
if(strpos($t,'{')!==false){
$t = substr($t, strrpos($t,'{') + 1);
}
$parts = explode("|", $t);
$s = preg_replace("+\{".preg_quote($t)."\}+is", $parts[array_rand($parts)], $s, 1);
return spinin($s);
}
//  MUST USE THESE TWO TAGS FOR SPINTAX SCRIPT ABOVE TO WORK <spin> SPINTAX CONTENT {HERE|PLACED HERE|RIGHT HERE|PUT HERE}  </spin>
  

// END SPINTAX CODE


//   END MATCH UP COLUMN DATA



 //   MATCH UP COLUMN DATA
// #######################
// XXXXXXXXXXXXXXXXXXXXXXX
// #######################

$data_file = fopen("roofing.csv", "r")or die("Unable to open file!");
$city=$_GET['city'];
while (!feof($data_file) ) {
$line_of_text = fgetcsv($data_file);
if( $city==$line_of_text[2])
$stateabrr=$line_of_text[3];
if( $city==$line_of_text[2])
$longitude=$line_of_text[4];
if( $city==$line_of_text[2])
$latitude=$line_of_text[5];
if( $city==$line_of_text[2])
$Metalongitude=$line_of_text[4];
if( $city==$line_of_text[2])
$Metalatitude=$line_of_text[5];
if( $city==$line_of_text[2])
$postalcodes=$line_of_text[6];
if( $city==$line_of_text[2])
$zipcode=$line_of_text[6]; 
}
$extractpostalcodes=(explode(';',$postalcodes,0));
foreach ($extractpostalcodes as $displayallpostalcodes){ 	
$postalcodes = str_replace(';',", ",$displayallpostalcodes); 
}


$extractzipcodes=(explode(';',"<span class=\"eachcode\"><ul><li>".$zipcode."</li></ul></span>",0));
foreach ($extractzipcodes as $displayallzipcodes){ 	
$zipcodelist = str_replace(';',"</li><li>",$displayallzipcodes); 
 }  



// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS



//    STATE VARABLE-------->>> [state]
// ####################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ####################################


 $state = str_replace("_"," ",$state);
  $template_data = str_replace("[state]",$state,$template_data);




//   END STATE VARABLE




//     CITY VARABLE-------->>> [city]
// ####################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ####################################


	$city = str_replace("_"," ",$city);
	$template_data = str_replace("[city]",$city,$template_data);




//   END CITY VARABLE


//   EXPANDED OPTIONS AREA (WILL ADD MORE WHEN I CAN)------------>>>>>>>>>       ADDED MODULES:
// ###################################################
// ###################################################---------->>>>>>>>>>       CURRENT TIME AND DATE MODULE

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX------------>>>>>>>        NEWS FEED MODULE

// ###################################################---------->>>>>>>>>        GOOGLE MAPS MODULE NO API NEEDED

// ###################################################---------->>>>>>>>>        RANDOM SPINTAX ARTICLE PULLED FROM DIRECTORY AND DISPLAYED


 //------------------------------------------------------------------------------------------------------------------------------------------


//  print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>> [Current_Time_and_Date]




//#####   #############      #############                        print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>> [Current_Time_and_Date]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################           print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>> [Current_Time_and_Date]


date_default_timezone_set("America/New_York");
$present_time_and_date = date("F j, Y, g:i a"); 
$template_data = str_replace("[Current_Time_and_Date]",$present_time_and_date,$template_data);
   


//   END  print(CURRENT DATE AND TIME MODULE)








//     RELATED NEWS FEED MODULE----------->>>>>>  [News_Feed]



//#####   #############      #############                         RELATED NEWS FEED MODULE----------->>>>>>  [News_Feed]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################            RELATED NEWS FEED MODULE----------->>>>>>  [News_Feed]




//   (gfeedfetcher)   VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm   FOR MORE DETAILS---->>                VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm
                                                                                         	
                                                                                        
//   MUST HAVE THIS CODE POSTED IN THE <head>   </head>   SECTION FOR THIS TO WORK    DOWNLOAD:  gfeedfetcher.js ---->>            VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm




//   REMOVE THE  // SYMBOL BELOW --->> COPY AND PASTE THE CODE BELOW IN YOUR HTML HEAD SECTION AND DOWNLOAD  gfeedfetcher.js---->>  VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm                                                     	
                                                                      


//   REMOVE THE  // SYMBOL BELOW --->> COPY AND PASTE THE CODE BELOW IN YOUR HTML HEAD SECTION AND DOWNLOAD  gfeedfetcher.js  FOR MORE INFORMATION ---->>   VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm

     
     
     
     
       //<!-- NEWS Feed JavaScript Code For HTML <head> </head> Section -->    
     
          
             //<!-- NEWS Feed Start Code -->
             
             
             //copy and past code START
            
             
            //<script type="text/javascript" src="http://www.google.com/jsapi">   </script>     
            
            //<script type="text/javascript" src="js/gfeedfetcher.js">
              
              ///***********************************************
              //* gAjax RSS Feeds Displayer- (c) Dynamic Drive (www.dynamicdrive.com)
              //* This notice MUST stay intact for legal use
              //* Visit http://www.dynamicdrive.com/ for full source code
              //***********
               
            //</script> 
            
            
            //END copy code
            
            //<!-- NEWS Feed End Code -->
  
  
  
// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS    



//  USE ANY NEWS FEED URLS OR ADD ADDITIONAL FEEDS  gfeedfetcher

$news_feed_data=(' <script type="text/javascript">
var socialfeed=new gfeedfetcher("newsfeed", "newsfeedclass", "_new")
socialfeed.addFeed("Google", "http://news.google.com/news?hl=en&gl=us&q=[KEYWORD]&um=1&ie=UTF-8&output=rss") //Specify "label" plus URL to RSS feed
          socialfeed.addFeed("Google", "http://news.google.com/news?hl=en&gl=us&q=[city]+[state]&um=1&ie=UTF-8&output=rss") //Specify "label" plus URL to RSS feed
          socialfeed.displayoptions("label datetime snippet") //show the specified additional fields
          socialfeed.setentrycontainer("div") //Display each entry as a DIV
          socialfeed.filterfeed(4, "label") //Show 6 entries, sort by label
          socialfeed.init() //Always call this last
        </script> ');

// SEE INSTRUCTION FOR CSS MAPPING   OR    VISIT:      http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm
$template_data = str_replace("[News_Feed]",$news_feed_data,$template_data);



//FOR MORE INFORMATION ABOUT THE (gfeedfetcher) NEWS FEED MODULE  VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm




//   END RELATED NEWS FEED MODULE

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS


//       GOOGLE MAPS MODULE NO API NEEDED
//#####   #############      #############                           GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################
//                                                                   GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]


//YOU MUST ADJUST THE MAP PARAMETERS HERE
$map_data =('
<iframe width="225" height="485" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://maps.google.com/maps?q=Chesapeake+VA&amp;ie=UTF8&amp;&amp;output=embed"></iframe><br />
');

//  GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]
$template_data = str_replace("[Map]",$map_data ,$template_data);
//  GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]


//  END GOOGLE MAPS MODULE


// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS




//  RANDOM SPINTAX ARTICLE PULLED FROM A DIRECTORY AND DISPLAYED ----------->>>>>>  [Random_Article]


//  WITH THIS MODULE YOU CAN PULL A RANDOM SPINTAX ARTICLE OR A REGULAR ARTICLE FROM A DIRECTORY AND DISPLAY


//  A NEW ARTICLE WILL SHOW ON EACH BROWSER REFRESH



 //#####   #############      #############                           RANDOM SPINTAX ARTICLE PULLED FROM A DIRECTORY AND DISPLAYED ----------->>>>>>  [Random_Article]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################
//                                                                    RANDOM SPINTAX ARTICLE PULLED FROM A DIRECTORY AND DISPLAYED ----------->>>>>>  [Random_Article]



 

// ###################################################---------->>>>>>>>>        CURRENT TIME AND DATE MODULE

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX------------>>>>>>>        NEWS FEED MODULE

// ###################################################---------->>>>>>>>>        GOOGLE MAPS MODULE NO API NEEDED




// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS




// END OFEXPANDED OPTIONS AREA                  // END OFEXPANDED OPTIONS AREA                // END OFEXPANDED OPTIONS AREA  
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************




// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS





//      STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
// ###################################################     // ###################################################
// ###################################################    // ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################    // ###################################################
//      STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
  
  date_default_timezone_set("America/New_York");
  $present_time_and_date = date("F j, Y, g:i a"); 
  $template_data = str_replace("[Current_Time_and_Date]",$present_time_and_date,$template_data);
	$template_data = str_replace("[zipcode]",$zipcodelist,$template_data);
  $template_data = str_replace("[state_abv.]",$stateabrr,$template_data);
  $Metalongitudearray = array("&#176;"," "," N", " W", " S", " E","N","W","S","E");
  $Metalongitude = str_replace($Metalongitudearray,"",$Metalongitude);
  $template_data = str_replace("[Metalongitude]",$Metalongitude,$template_data);
  $Metalatitudearray = array("&#176;"," ", " N", " W", " S", " E","N","W","S","E");
  $Metalatitude = str_replace($Metalatitudearray,"",$Metalatitude);
  $template_data = str_replace("[Metalatitude]",$Metalatitude,$template_data);
  $template_data = str_replace("[longitude]",$longitude,$template_data);
  $template_data = str_replace("[latitude]",$latitude,$template_data);
  $template_data = str_replace("[postal_codes]",$postalcodes,$template_data); 
 
	                                 

	
 {
  $keyword= str_replace(" ","_",$keyword);	
	$template_data = str_replace("[keywordlink]",$keyword,$template_data);
	$city = str_replace(" ","_",$city);
	$template_data = str_replace("[citylink]",$city,$template_data);
  $state = str_replace(" ","_",$state);
	$template_data = str_replace("[statelink]",$state,$template_data);
  }

 echo (spin($template_data)); 
  

ob_flush();
flush();
ob_end_clean();

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS
?>

