<?php
function genXHTMLHeader($title, $styles)
{
    $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n";

    $header .=<<<ENDHTML
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>$title</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <link rel="stylesheet" href="/styles/main2010.css" type="text/css" />

ENDHTML;
    if (isset($styles))
    {
        foreach ($styles as $s)
        {
            $header .=<<<ENDHTML
    <link rel="stylesheet" href="/styles/$s" type="text/css" />

ENDHTML;
        }
    }

    $header .= <<<ENDHTML
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

</head>
<body>
<div id="page">

ENDHTML;

    return $header;
}

function genXHTMLFooter()
{
    $footer = <<<ENDHTML
</div> <!-- end page -->
</body>
</html>

ENDHTML;

    return $footer;
}

function genLinkList($list)
{
    $level = 1;

$html .= <<<ENDHTML
<ul class="top">

ENDHTML;

    foreach ($list as $listitem)
    {

	    if ($listitem['depth'] > $level) 
	    {
		    $level++;
$html .= <<<ENDHTML
<ul class="sub">

ENDHTML;
	    } elseif ($listitem['depth'] < $level) 
	    {
		    $html .= <<<ENDHTML
</ul>
</li>

ENDHTML;
		    $level--;
    	    }



            if ($listitem['url'] == "") {

            $html .=<<<ENDHTML
            <li class="menuitem">{$listitem['text']}

ENDHTML;
            } else {

            $html .=<<<ENDHTML
            <li class="menuitem"><a href="{$listitem['url']}">{$listitem['text']}</a></li>

ENDHTML;

            }
    }
    $html .=<<<ENDHTML
    </ul>

ENDHTML;

    return $html;
}

?>
