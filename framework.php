<?php defined('_JEXEC') or die;

// Define shortcuts for template parameters
$loadMoo 				= $this->params->get('loadMoo');
$setGeneratorTag		= $this->params->get('setGeneratorTag');
$analytics 				= $this->params->get('analytics');
$jQuery					= $this->params->get('jQuery');
$customCSS    			= $this->params->get('customCSS');
$logoUp    				= $this->params->get('logoUp');
$custLogo    			= $this->params->get('custLogo');
$unOrbit    			= $this->params->get('unOrbit');
$unReveal    			= $this->params->get('unReveal');
$unNav	    			= $this->params->get('unNav');
$unButt	    			= $this->params->get('unButt');
$unTabs	    			= $this->params->get('unTabs');
$unForms    			= $this->params->get('unForms');
$unTooltips    			= $this->params->get('unTooltips');
$unAccord	  			= $this->params->get('unAccord');
$unPlaceholder 			= $this->params->get('unPlaceholder');
$unAlerts				= $this->params->get('unAlerts');
$minFound				= $this->params->get('minFound');
$setWidth    			= $this->params->get('setWidth');
$templateLayout 		= $this->params->get('layout');
$offCanvas 				= $this->params->get('offCanvas');
$topButton    			= $this->params->get('topButton');
$sideButton	            = $this->params->get('sideButton');

// for slider
$imgUrl1  				= $this->params->get('imgUrl1');
$imgUrl2   				= $this->params->get('imgUrl2');
$imgUrl3   				= $this->params->get('imgUrl3');
$imgUrl4   				= $this->params->get('imgUrl4');
$imgUrl5   				= $this->params->get('imgUrl5');
$imgUrl6   				= $this->params->get('imgUrl6');
$imgUrl7   				= $this->params->get('imgUrl7');
$imgUrl8   				= $this->params->get('imgUrl8');
$imgUrl9   				= $this->params->get('imgUrl9');
$imgUrl10   			= $this->params->get('imgUrl10');
$imgExcerpt1            = $this->params->get('imgExcerpt1');
$imgExcerpt2            = $this->params->get('imgExcerpt2');
$imgExcerpt3            = $this->params->get('imgExcerpt3');
$imgExcerpt4            = $this->params->get('imgExcerpt4');
$imgExcerpt5            = $this->params->get('imgExcerpt5');
$imgExcerpt6            = $this->params->get('imgExcerpt6');
$imgExcerpt7            = $this->params->get('imgExcerpt7');
$imgExcerpt8            = $this->params->get('imgExcerpt8');
$imgExcerpt9            = $this->params->get('imgExcerpt9');
$imgExcerpt10			= $this->params->get('imgExcerpt10');
$imgLink1               = $this->params->get('imgLink1');
$imgLink2               = $this->params->get('imgLink2');
$imgLink3               = $this->params->get('imgLink3');
$imgLink4               = $this->params->get('imgLink4');
$imgLink5               = $this->params->get('imgLink5');
$imgLink6               = $this->params->get('imgLink6');
$imgLink7               = $this->params->get('imgLink7');
$imgLink8               = $this->params->get('imgLink8');
$imgLink9               = $this->params->get('imgLink9');
$imgLink10				= $this->params->get('imgLink10');

$pageTitle = $this->getTitle();
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
if ($option=="com_content" && $view=="article") {
    $ids = explode(':',JRequest::getString('id'));
    $article_id = $ids[0];
    //$article =& JTable::getInstance("content");  *removed due to error
	$article = JTable::getInstance("content");
    $article->load($article_id);
    
}

// Count Modules & Stuff
$offCanvasSideMenu = (int) ($this->countModules('offCanvasSideMenu') > 0);
$offCanvasSideModule = (int) ($this->countModules('offCanvasSideModule') > 0);

$offCanvasTopMenu = (int) ($this->countModules('offCanvasTopMenu') > 0);
$offCanvasTopModule = (int) ($this->countModules('offCanvasTopModule') > 0);

$logo = (int) ($this->countModules('logo') > 0);
//$menu = (int) ($this->countModules('menu') > 0);
$basicMenu = (int) ($this->countModules('basicMenu') > 0);
$searchbar = (int) ($this->countModules('searchbar') > 0);
$auxiMenu = (int) ($this->countModules('auxiMenu') > 0);

$slider = (int) ($this->countModules('slider') > 0);

$breadcrumbs = (int) ($this->countModules('breadcrumbs') > 0);

$above1 = (int) ($this->countModules('above1') > 0);
$above2 = (int) ($this->countModules('above2') > 0);
$above3 = (int) ($this->countModules('above3') > 0);

// Banner
$ban_row1_1 = (int) ($this->countModules('ban_row1_1') > 0);
$ban_row1_2 = (int) ($this->countModules('ban_row1_2') > 0);
$ban_row1_3 = (int) ($this->countModules('ban_row1_3') > 0);
$ban_row1_4 = (int) ($this->countModules('ban_row1_4') > 0);

$ban_row2_1 = (int) ($this->countModules('ban_row2_1') > 0);
$ban_row2_2 = (int) ($this->countModules('ban_row2_2') > 0);
$ban_row2_3 = (int) ($this->countModules('ban_row2_3') > 0);

$ban_row3_1 = (int) ($this->countModules('ban_row3_1') > 0);
$ban_row3_2 = (int) ($this->countModules('ban_row3_2') > 0);

$ban_row4_1 = (int) ($this->countModules('ban_row4_1') > 0);

$ban_row5_1 = (int) ($this->countModules('ban_row5_1') > 0);
$ban_row5_2 = (int) ($this->countModules('ban_row5_2') > 0);

$ban_row6_1 = (int) ($this->countModules('ban_row6_1') > 0);
$ban_row6_2 = (int) ($this->countModules('ban_row6_2') > 0);
$ban_row6_3 = (int) ($this->countModules('ban_row6_3') > 0);

$ban_row7_1 = (int) ($this->countModules('ban_row7_1') > 0);
$ban_row7_2 = (int) ($this->countModules('ban_row7_2') > 0);

$ban_row8_1 = (int) ($this->countModules('ban_row8_1') > 0);
$ban_row8_2 = (int) ($this->countModules('ban_row8_2') > 0);
$ban_row8_3 = (int) ($this->countModules('ban_row8_3') > 0);

$ban_row9_1 = (int) ($this->countModules('ban_row9_1') > 0);
$ban_row9_2 = (int) ($this->countModules('ban_row9_2') > 0);
$ban_row9_3 = (int) ($this->countModules('ban_row9_3') > 0);

// Upper
$upPos_row1_1 = (int) ($this->countModules('upPos_row1_1') > 0);
$upPos_row1_2 = (int) ($this->countModules('upPos_row1_2') > 0);
$upPos_row1_3 = (int) ($this->countModules('upPos_row1_3') > 0);
$upPos_row1_4 = (int) ($this->countModules('upPos_row1_4') > 0);

$upPos_row2_1 = (int) ($this->countModules('upPos_row2_1') > 0);
$upPos_row2_2 = (int) ($this->countModules('upPos_row2_2') > 0);
$upPos_row2_3 = (int) ($this->countModules('upPos_row2_3') > 0);

$upPos_row3_1 = (int) ($this->countModules('upPos_row3_1') > 0);
$upPos_row3_2 = (int) ($this->countModules('upPos_row3_2') > 0);

$upPos_row4_1 = (int) ($this->countModules('upPos_row4_1') > 0);

$upPos_row5_1 = (int) ($this->countModules('upPos_row5_1') > 0);
$upPos_row5_2 = (int) ($this->countModules('upPos_row5_2') > 0);

$upPos_row6_1 = (int) ($this->countModules('upPos_row6_1') > 0);
$upPos_row6_2 = (int) ($this->countModules('upPos_row6_2') > 0);
$upPos_row6_3 = (int) ($this->countModules('upPos_row6_3') > 0);

$upPos_row7_1 = (int) ($this->countModules('upPos_row7_1') > 0);
$upPos_row7_2 = (int) ($this->countModules('upPos_row7_2') > 0);

$upPos_row8_1 = (int) ($this->countModules('upPos_row8_1') > 0);
$upPos_row8_2 = (int) ($this->countModules('upPos_row8_2') > 0);
$upPos_row8_3 = (int) ($this->countModules('upPos_row8_3') > 0);

$upPos_row9_1 = (int) ($this->countModules('upPos_row9_1') > 0);
$upPos_row9_2 = (int) ($this->countModules('upPos_row9_2') > 0);
$upPos_row9_3 = (int) ($this->countModules('upPos_row9_3') > 0);

// Bottom
$downPos_row1_1 = (int) ($this->countModules('downPos_row1_1') > 0);
$downPos_row1_2 = (int) ($this->countModules('downPos_row1_2') > 0);
$downPos_row1_3 = (int) ($this->countModules('downPos_row1_3') > 0);
$downPos_row1_4 = (int) ($this->countModules('downPos_row1_4') > 0);

$downPos_row2_1 = (int) ($this->countModules('downPos_row2_1') > 0);
$downPos_row2_2 = (int) ($this->countModules('downPos_row2_2') > 0);
$downPos_row2_3 = (int) ($this->countModules('downPos_row2_3') > 0);

$downPos_row3_1 = (int) ($this->countModules('downPos_row3_1') > 0);
$downPos_row3_2 = (int) ($this->countModules('downPos_row3_2') > 0);

$downPos_row4_1 = (int) ($this->countModules('downPos_row4_1') > 0);

$downPos_row5_1 = (int) ($this->countModules('downPos_row5_1') > 0);
$downPos_row5_2 = (int) ($this->countModules('downPos_row5_2') > 0);

$downPos_row6_1 = (int) ($this->countModules('downPos_row6_1') > 0);
$downPos_row6_2 = (int) ($this->countModules('downPos_row6_2') > 0);
$downPos_row6_3 = (int) ($this->countModules('downPos_row6_3') > 0);

$downPos_row7_1 = (int) ($this->countModules('downPos_row7_1') > 0);
$downPos_row7_2 = (int) ($this->countModules('downPos_row7_2') > 0);

$downPos_row8_1 = (int) ($this->countModules('downPos_row8_1') > 0);
$downPos_row8_2 = (int) ($this->countModules('downPos_row8_2') > 0);
$downPos_row8_3 = (int) ($this->countModules('downPos_row8_3') > 0);

$downPos_row9_1 = (int) ($this->countModules('downPos_row9_1') > 0);
$downPos_row9_2 = (int) ($this->countModules('downPos_row9_2') > 0);
$downPos_row9_3 = (int) ($this->countModules('downPos_row9_3') > 0);

$agFoot_row1_1 = (int) ($this->countModules('agFoot_row1_1') > 0);
$agFoot_row1_2 = (int) ($this->countModules('agFoot_row1_2') > 0);
$agFoot_row1_3 = (int) ($this->countModules('agFoot_row1_3') > 0);
$transSeal_1 = (int) ($this->countModules('transSeal_1') > 0);

$agFoot_row2_1 = (int) ($this->countModules('agFoot_row2_1') > 0);
$agFoot_row2_2 = (int) ($this->countModules('agFoot_row2_2') > 0);
$transSeal_2 = (int) ($this->countModules('transSeal_2') > 0);

$agFoot_row3_1 = (int) ($this->countModules('agFoot_row3_1') > 0);
$transSeal_3 = (int) ($this->countModules('transSeal_3') > 0);

$stanFoot_row1_1 = (int) ($this->countModules('stanFoot_row1_1') > 0);
$stanFoot_row1_2 = (int) ($this->countModules('stanFoot_row1_2') > 0);
$stanFoot_row1_3 = (int) ($this->countModules('stanFoot_row1_3') > 0);
$stanFoot_row1_4 = (int) ($this->countModules('stanFoot_row1_4') > 0);
// End

$left = (int) ($this->countModules('left') > 0);
$right = (int) ($this->countModules('right') > 0);

$below1 = (int) ($this->countModules('below1') > 0);
$below2 = (int) ($this->countModules('below2') > 0);
$below3 = (int) ($this->countModules('below3') > 0);

$bottom1 = (int) ($this->countModules('bottom1') > 0);
$bottom2 = (int) ($this->countModules('bottom2') > 0);
$bottom3 = (int) ($this->countModules('bottom3') > 0);

$footerTop1 = (int) ($this->countModules('footerTop1') > 0);
$footerTop2 = (int) ($this->countModules('footerTop2') > 0);
$footerTop3 = (int) ($this->countModules('footerTop3') > 0);
$footerTop4 = (int) ($this->countModules('footerTop4') > 0);

$footer1 = (int) ($this->countModules('footer1') > 0);
$footer2 = (int) ($this->countModules('footer2') > 0);
$footer3 = (int) ($this->countModules('footer3') > 0);

$menuMod = (int) ($this->countModules('menuMod') > 0);

$menuModTitle 	= $this->params->get('menuModTitle');


// Get the column widths: There's probably a neater way to do it.

if (($right == "0") && ($left == "0")) {
$mainWidth = 'twelve columns';
}

elseif (($right != "0") && ($left == "0")) {
$mainWidth = 'nine columns'; $rightWidth = 'three columns';
}
elseif (($right == "0") && ($left != "0")) {
$mainWidth = 'nine columns'; $leftWidth = 'three columns';
}
elseif (($right != "0") && ($left != "0")) {
$mainWidth = 'eight columns'; $leftWidth = 'two columns'; $rightWidth = 'two columns';
}

//Peripheral module logic. 


//BANNER
// Top Module Logic
$ban_row1_ = compact( 'ban_row1_1', 'ban_row1_2', 'ban_row1_3', 'ban_row1_4' );//get modules into array
sort( $ban_row1_ );//sort array so it is in numerical order
$code1 = implode( '', $ban_row1_ );//combine array to string for code to test
//set module classes
switch( $code1 ) {
    case '0001': $ban_row1 = 'twelve columns'; break;
    case '0011': $ban_row1 = 'six columns'; break;
	case '0111': $ban_row1 = 'four columns'; break;
    default: $ban_row1 = 'three columns'; break;
}

// Top Module Logic
$ban_row2_ = compact( 'ban_row2_1', 'ban_row2_2', 'ban_row2_3' );//get modules into array
sort( $ban_row2_ );//sort array so it is in numerical order
$code2 = implode( '', $ban_row2_ );//combine array to string for code to test
//set module classes
switch( $code2 ) {
    case '001': $ban_row2 = 'twelve columns'; break;
    case '011': $ban_row2 = 'six columns'; break;
    default: $ban_row2 = 'four columns'; break;
}

// Top Module Logic
$ban_row3_ = compact( 'ban_row3_1', 'ban_row3_2' );//get modules into array
sort( $ban_row3_ );//sort array so it is in numerical order
$code3 = implode( '', $ban_row3_ );//combine array to string for code to test
//set module classes
switch( $code3 ) {
    case '001': $ban_row3 = 'twelve columns'; break;
    default: $ban_row3 = 'six columns'; break;
}


// Top Module Logic
$ban_row4_ = compact( 'ban_row4_1');//get modules into array
sort( $ban_row4_ );//sort array so it is in numerical order
$code4 = implode( '', $ban_row4_ );//combine array to string for code to test
//set module classes
switch( $code4 ) {
	  
      default: $ban_row4 = 'twelve columns'; break;
}

// Top Module Logic
$ban_row5_ = compact( 'ban_row5_1', 'ban_row5_2' );//get modules into array
sort( $ban_row5_ );//sort array so it is in numerical order
$code5 = implode( '', $ban_row5_ );//combine array to string for code to test
//set module classes
switch( $code5 ) {
    case '001': $ban_row5 = 'twelve columns'; break;
    default: $ban_row5 = 'six columns'; break;
}

// Top Module Logic
$ban_row6_ = compact( 'ban_row6_1', 'ban_row6_2', 'ban_row6_3' );//get modules into array
sort( $ban_row6_ );//sort array so it is in numerical order
$code6 = implode( '', $ban_row6_ );//combine array to string for code to test
//set module classes
switch( $code6 ) {
    case '001': $ban_row6 = 'twelve columns'; break;
	case '011': $ban_row6 = 'six columns'; break;
    default: $ban_row6 = 'four columns'; break;
}

// Top Module Logic
$ban_row7_ = compact( 'ban_row7_1', 'ban_row7_2');//get modules into array
sort( $ban_row7_ );//sort array so it is in numerical order
$code7 = implode( '', $ban_row7_ );//combine array to string for code to test
//set module classes
switch( $code7 ) {
    case '001': $ban_row7 = 'twelve columns'; break;
    default: $ban_row7 = 'six columns'; break;
}

// Top Module Logic
$ban_row8_ = compact( 'ban_row8_1', 'ban_row8_2', 'ban_row8_3' );//get modules into array
sort( $ban_row8_ );//sort array so it is in numerical order
$code8 = implode( '', $ban_row8_ );//combine array to string for code to test
//set module classes
switch( $code8 ) {
    case '001': $ban_row8 = 'twelve columns'; break;
	case '011': $ban_row8 = 'six columns'; break;
    default: $ban_row8 = 'four columns'; break;
}

// Top Module Logic
$ban_row9_ = compact( 'ban_row9_1', 'ban_row9_2', 'ban_row9_3' );//get modules into array
sort( $ban_row9_ );//sort array so it is in numerical order
$code9 = implode( '', $ban_row9_ );//combine array to string for code to test
//set module classes
switch( $code9 ) {
    case '001': $ban_row9 = 'twelve columns'; break;
	case '011': $ban_row9 = 'six columns'; break;
    default: $ban_row9 = 'four columns'; break;
}


//UPPER
// Top Module Logic
$upPos_row1_ = compact( 'upPos_row1_1', 'upPos_row1_2', 'upPos_row1_3', 'upPos_row1_4' );//get modules into array
sort( $upPos_row1_ );//sort array so it is in numerical order
$code1 = implode( '', $upPos_row1_ );//combine array to string for code to test
//set module classes
switch( $code1 ) {
    case '0001': $upPos_row1 = 'twelve columns'; break;
    case '0011': $upPos_row1 = 'six columns'; break;
	case '0111': $upPos_row1 = 'four columns'; break;
    default: $upPos_row1 = 'three columns'; break;
}

// Top Module Logic
$upPos_row2_ = compact( 'upPos_row2_1', 'upPos_row2_2', 'upPos_row2_3' );//get modules into array
sort( $upPos_row2_ );//sort array so it is in numerical order
$code2 = implode( '', $upPos_row2_ );//combine array to string for code to test
//set module classes
switch( $code2 ) {
    case '001': $upPos_row2 = 'twelve columns'; break;
    case '011': $upPos_row2 = 'six columns'; break;
    default: $upPos_row2 = 'four columns'; break;
}

// Top Module Logic
$upPos_row3_ = compact( 'upPos_row3_1', 'upPos_row3_2' );//get modules into array
sort( $upPos_row3_ );//sort array so it is in numerical order
$code3 = implode( '', $upPos_row3_ );//combine array to string for code to test
//set module classes
switch( $code3 ) {
    case '001': $upPos_row3 = 'twelve columns'; break;
    default: $upPos_row3 = 'six columns'; break;
}


// Top Module Logic
$upPos_row4_ = compact( 'upPos_row4_1');//get modules into array
sort( $upPos_row4_ );//sort array so it is in numerical order
$code4 = implode( '', $upPos_row4_ );//combine array to string for code to test
//set module classes
switch( $code4 ) {
	  
      default: $upPos_row4 = 'twelve columns'; break;
}

// Top Module Logic
$upPos_row5_ = compact( 'upPos_row5_1', 'upPos_row5_2' );//get modules into array
sort( $upPos_row5_ );//sort array so it is in numerical order
$code5 = implode( '', $upPos_row5_ );//combine array to string for code to test
//set module classes
switch( $code5 ) {
    case '001': $upPos_row5 = 'twelve columns'; break;
    default: $upPos_row5 = 'six columns'; break;
}

// Top Module Logic
$upPos_row6_ = compact( 'upPos_row6_1', 'upPos_row6_2', 'upPos_row6_3' );//get modules into array
sort( $upPos_row6_ );//sort array so it is in numerical order
$code6 = implode( '', $upPos_row6_ );//combine array to string for code to test
//set module classes
switch( $code6 ) {
    case '001': $upPos_row6 = 'twelve columns'; break;
	case '011': $upPos_row6 = 'six columns'; break;
    default: $upPos_row6 = 'four columns'; break;
}

// Top Module Logic
$upPos_row7_ = compact( 'upPos_row7_1', 'upPos_row7_2');//get modules into array
sort( $upPos_row7_ );//sort array so it is in numerical order
$code7 = implode( '', $upPos_row7_ );//combine array to string for code to test
//set module classes
switch( $code7 ) {
    case '001': $upPos_row7 = 'twelve columns'; break;
    default: $upPos_row7 = 'six columns'; break;
}

// Top Module Logic
$upPos_row8_ = compact( 'upPos_row8_1', 'upPos_row8_2', 'upPos_row8_3' );//get modules into array
sort( $upPos_row8_ );//sort array so it is in numerical order
$code8 = implode( '', $upPos_row8_ );//combine array to string for code to test
//set module classes
switch( $code8 ) {
    case '001': $upPos_row8 = 'twelve columns'; break;
	case '011': $upPos_row8 = 'six columns'; break;
    default: $upPos_row8 = 'four columns'; break;
}

// Top Module Logic
$upPos_row9_ = compact( 'upPos_row9_1', 'upPos_row9_2', 'upPos_row9_3' );//get modules into array
sort( $upPos_row9_ );//sort array so it is in numerical order
$code9 = implode( '', $upPos_row9_ );//combine array to string for code to test
//set module classes
switch( $code9 ) {
    case '001': $upPos_row9 = 'twelve columns'; break;
	case '011': $upPos_row9 = 'six columns'; break;
    default: $upPos_row9 = 'four columns'; break;
}

//BOTTOM
// Top Module Logic
$downPos_row1_ = compact( 'downPos_row1_1', 'downPos_row1_2', 'downPos_row1_3', 'downPos_row1_4' );//get modules into array
sort( $downPos_row1_ );//sort array so it is in numerical order
$code1 = implode( '', $downPos_row1_ );//combine array to string for code to test
//set module classes
switch( $code1 ) {
    case '0001': $downPos_row1 = 'twelve columns'; break;
    case '0011': $downPos_row1 = 'six columns'; break;
	case '0111': $downPos_row1 = 'four columns'; break;
    default: $downPos_row1 = 'three columns'; break;
}

// Top Module Logic
$downPos_row2_ = compact( 'downPos_row2_1', 'downPos_row2_2', 'downPos_row2_3' );//get modules into array
sort( $downPos_row2_ );//sort array so it is in numerical order
$code2 = implode( '', $downPos_row2_ );//combine array to string for code to test
//set module classes
switch( $code2 ) {
    case '001': $downPos_row2 = 'twelve columns'; break;
    case '011': $downPos_row2 = 'six columns'; break;
    default: $downPos_row2 = 'four columns'; break;
}

// Top Module Logic
$downPos_row3_ = compact( 'downPos_row3_1', 'downPos_row3_2' );//get modules into array
sort( $downPos_row3_ );//sort array so it is in numerical order
$code3 = implode( '', $downPos_row3_ );//combine array to string for code to test
//set module classes
switch( $code3 ) {
    case '001': $downPos_row3 = 'twelve columns'; break;
    default: $downPos_row3 = 'six columns'; break;
}


// Top Module Logic
$downPos_row4_ = compact( 'downPos_row4_1');//get modules into array
sort( $downPos_row4_ );//sort array so it is in numerical order
$code4 = implode( '', $downPos_row4_ );//combine array to string for code to test
//set module classes
switch( $code4 ) {
	  
      default: $downPos_row4 = 'twelve columns'; break;
}

// Top Module Logic
$downPos_row5_ = compact( 'downPos_row5_1', 'downPos_row5_2' );//get modules into array
sort( $downPos_row5_ );//sort array so it is in numerical order
$code5 = implode( '', $downPos_row5_ );//combine array to string for code to test
//set module classes
switch( $code5 ) {
    case '001': $downPos_row5 = 'twelve columns'; break;
    default: $downPos_row5 = 'six columns'; break;
}

// Top Module Logic
$downPos_row6_ = compact( 'downPos_row6_1', 'downPos_row6_2', 'downPos_row6_3' );//get modules into array
sort( $downPos_row6_ );//sort array so it is in numerical order
$code6 = implode( '', $downPos_row6_ );//combine array to string for code to test
//set module classes
switch( $code6 ) {
    case '001': $downPos_row6 = 'twelve columns'; break;
	case '011': $downPos_row6 = 'six columns'; break;
    default: $downPos_row6 = 'four columns'; break;
}

// Top Module Logic
$downPos_row7_ = compact( 'downPos_row7_1', 'downPos_row7_2');//get modules into array
sort( $downPos_row7_ );//sort array so it is in numerical order
$code7 = implode( '', $downPos_row7_ );//combine array to string for code to test
//set module classes
switch( $code7 ) {
    case '001': $downPos_row7 = 'twelve columns'; break;
    default: $downPos_row7 = 'six columns'; break;
}

// Top Module Logic
$downPos_row8_ = compact( 'downPos_row8_1', 'downPos_row8_2', 'downPos_row8_3' );//get modules into array
sort( $downPos_row8_ );//sort array so it is in numerical order
$code8 = implode( '', $downPos_row8_ );//combine array to string for code to test
//set module classes
switch( $code8 ) {
    case '001': $downPos_row8 = 'twelve columns'; break;
	case '011': $downPos_row8 = 'six columns'; break;
    default: $downPos_row8 = 'four columns'; break;
}

// Top Module Logic
$downPos_row9_ = compact( 'downPos_row9_1', 'downPos_row9_2', 'downPos_row9_3' );//get modules into array
sort( $downPos_row9_ );//sort array so it is in numerical order
$code9 = implode( '', $downPos_row9_ );//combine array to string for code to test
//set module classes
switch( $code9 ) {
    case '001': $downPos_row9 = 'twelve columns'; break;
	case '011': $downPos_row9 = 'six columns'; break;
    default: $downPos_row9 = 'four columns'; break;
}


// above Module Logic
$above = compact( 'above1', 'above2', 'above3' );//get modules into array
sort( $above );//sort array so it is in numerical order
$code = implode( '', $above );//combine array to string for code to test
//set module classes
switch( $code ) {
    case '001': $aboveWidth = 'twelve columns'; break;
    case '011': $aboveWidth = 'six columns'; break;
    default: $aboveWidth = 'four columns'; break;
}
// Bottom Module Logic
$bottom = compact( 'bottom1', 'bottom2', 'bottom3' );//get modules into array
sort( $bottom );//sort array so it is in numerical order
$code = implode( '', $bottom );//combine array to string for code to test
//set module classes
switch( $code ) {
    case '001': $bottomWidth = 'twelve columns'; break;
    case '011': $bottomWidth = 'six columns'; break;
    default: $bottomWidth = 'four columns'; break;
}

// Below Module Logic
$below = compact( 'below1', 'below2', 'below3' );//get modules into array
sort( $below );//sort array so it is in numerical order
$code = implode( '', $below );//combine array to string for code to test
//set module classes
switch( $code ) {
    case '001': $belowWidth = 'twelve columns'; break;
    case '011': $belowWidth = 'six columns'; break;
    default: $belowWidth = 'four columns'; break;
}

// Footer Top Module Logic
$agFoot_row1_ = compact( 'agFoot_row1_1', 'agFoot_row1_2', 'agFoot_row1_3', 'agFoot_row1_4' );//get modules into array
sort( $agFoot_row1_ );//sort array so it is in numerical order
$code = implode( '', $agFoot_row1_ );//combine array to string for code to test
//set module classes
switch( $code ) {
    case '0001': $agFoot_row1 = 'twelve columns'; break;
    case '0011': $agFoot_row1 = 'six columns'; break;
	case '0111': $agFoot_row1 = 'four columns'; break;
    default: $agFoot_row1 = 'three columns'; break;
}

// Footer Module Logic
$footers = compact( 'footer1', 'footer2', 'footer3' );//get modules into array
sort( $footers );//sort array so it is in numerical order
$code = implode( '', $footers );//combine array to string for code to test
//set module classes
switch( $code ) {
    case '001': $footerWidth = 'twelve columns'; break;
    case '011': $footerWidth = 'six columns'; break;
    default: $footerWidth = 'four columns'; break;
}


#----------------------------- Construct Code Snippets-----------------------------#
// GPL code taken from Construct template framework by Matt Thomas http://construct-framework.com/

// To enable use of site configuration
$app 					= JFactory::getApplication();
$pageParams             = $app->getParams();
$sitename				= $app->getCfg('sitename');
// Returns a reference to the global document object
$doc = JFactory::getDocument();

// Define relative path to the current template directory
$template = 'templates/'.$this->template;

// Change generator tag
$this->setGenerator($setGeneratorTag);

// Remove MooTools if set to no.
if ( !$loadMoo ) {
	unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-more.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/modal.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools.js']);
    unset($doc->_scripts[$this->baseurl.'/plugins/system/mtupgrade/mootools.js']);
}

#-------------End Construct Code--------------------------------------#

// Add stylesheets etc
$doc->addStyleSheet($template.'/css/foundation.css');
$doc->addStyleSheet($template.'/css/templateCore.css');
$doc->addStyleSheet($template.'/css/style.css');
$doc->addCustomTag('<script src="'.$template.'/js/modernizr.foundation.js"></script>');


 if ($minFound > 0) { 
    $doc->addCustomTag('<script src="'.$template.'/js/foundation.js"></script>');
  }
  else {
	  
   if ($jQuery > 0) {
    $doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>');
   }
   if ($unReveal > 0) {
    $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.reveal.js"></script>');
   }	

   if ($unOrbit  > 0) { 
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.orbit.js"></script>');
   } 	

  if ($unNav > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.navigation.js"></script>');
  } 	

  if ($unButt > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.buttons.js"></script>');
  } 

  if ($unTabs > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.tabs.js"></script>');
  } 

  if ($unForms > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.forms.js"></script>');
  }

  if ($unTooltips > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.tooltips.js"></script>');
  }

  if ($unAccord > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.accordion.js"></script>');
  } 	

  if ($unPlaceholder > 0) { 
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.placeholder.js"></script>');
  }

  if ($unAlerts > 0) {
  $doc->addCustomTag('<script src="'.$template.'/js/jquery.foundation.alerts.js"></script>');
  } 	
}
 if ($offCanvas > 0) {
	$doc->addStyleSheet($template.'/css/offcanvas.css');
	$doc->addCustomTag('<script src="'.$template.'/js/jquery.offcanvas.js"></script>');
  }
