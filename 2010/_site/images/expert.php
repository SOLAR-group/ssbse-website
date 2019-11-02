<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>2nd International Symposium on Search Based Software Engineering</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <link rel="stylesheet" href="styles/main2010.css" type="text/css" />
    <link rel="stylesheet" href="styles/styles2010.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>
<body>
    <div id="page">
        <div id="banner">
            <div style="float: left;">
                <!-- <img style="vertical-align: bottom;" src="images/cumberland_window.jpg" alt="Cumberland Lodge Window"/> -->
                <img style="vertical-align: bottom;" id="logo" src="images/SSBSE_logo_small.png" alt="SSBSE Logo"/>
            </div>

            <div id="bannertext">
                <h1>SSBSE 2010</h1>
                <h2>2nd International Symposium on Search Based Software Engineering</h2>
                <h3>Benevento, Italy</h3>
                <h3>Tuesday 7<sup>th</sup> September 2010 - Thursday 9<sup>th</sup> September 2010</h3>
            </div>
            <div class="clearboth">&nbsp;</div>
        </div> <!-- end banner -->
        <div id="content">
            <div id="contenttitle">
                <h1>Software Engineering Experts' Panel: The Status and Future of SBSE in the Software Engineering Community</h1>
            </div>
            <div id="menucolumn">
                <div>
                    <ul class="top">
                        <li class="menuitem"><a href="index.html">Home</a></li>
                        <li class="menuitem"><a href="register.html">Registration</a></li>
                        <li class="menuitem"><a href="program.html">Program</a></li>
                        <li class="menuitem"><a href="keynote.html">Keynote Speakers</a></li>
                        <li class="menuitem"><a href="submission.html">Paper Submission</a></li>
                        <li class="menuitem"><a href="cfp.html">Call for Papers:</a></li>
                        <ul class="sub">
                            <li class="menuitem"><a href="cfpreg.html">Regular Papers</a></li>
                            <li class="menuitem"><a href="phdtrack.html">PhD Track</a></li>
                            <li class="menuitem"><a href="cfpfast.html">Fast Abstracts</a></li>
                        </ul>
                    </li>
                    <li class="menuitem"><a href="specialissue.html">IST Special Issue</a></li>
                    <li class="menuitem"><a href="venue.html">Venue</a></li>
                    <li class="menuitem"><a href="aboutsbse.html">About SBSE</a></li>
                    <li class="menuitem"><a href="organisers.html">Organisers</a></li>
                </ul>
                
                <div align="center">
                   <a href="http://www.facebook.com/event.html?eid=293186317007">
                     <img src="images/2010/FaceBook-48x48.png" alt="Facebook Event for SSBSE" width="40px" height="40px"  />
                 </a>
                 <a href="http://twitter.com/ssbse">
                     <img src="images/2010/Twitter-48x48.png" alt="SSBSE Twitter Account" width="40px" height="40px"  />
                 </a>
                 <a href="http://www.linkedin.com/groups?home=&gid=2699369">
                     <img src="images/2010/linkedin.png" alt="LinkedIn Group" width="40px" height="40px" />
                 </a>
             </div>
         </div>
     </div>
     
     
     
     <div id="maincontainer">
        
        

    <div id="maincolumn">

               <p>We are very pleased to announce a special panel discussion as part of the symposium program.  
	Five world-leading experts on software engineering will discuss the current state of search-based
	software engineering research, identify challenges to the research agenda, and assess the potential 
	impact of SBSE on software engineering practice. </p>

	<p>The panellists are:</p>

ENDHTML;

    $people = array();

    $person['name'] = "Norman Fenton";
    $person['desc'] = "Professor of Computer Science, Queen Mary, University of London, UK";
    $person['imgurl'] = "images/norman-fenton-small.jpg";
    $person['homepage'] = "http://www.dcs.qmul.ac.uk/~norman/";
    $people[] = $person;

    $person['name'] = "Anthony Finkelstein";
    $person['desc'] = "Professor of Software Systems Engineering, University College London, UK";
    $person['imgurl'] = "images/anthony-finkelstein-small.jpg";
    $person['homepage'] = "http://www.cs.ucl.ac.uk/staff/A.Finkelstein";
    $people[] = $person;

    $person['name'] = "Paolo Inveradi";
    $person['desc'] = "Professor, Universit&agrave;  dell'Aquila, Italy";
    $person['imgurl'] = "images/paolo-inveradi-small.jpg";
    $person['homepage'] = "http://www.di.univaq.it/inverard/paola.html";
    $people[] = $person;

    $person['name'] = "Mary Lou Soffa";
    $person['desc'] = "Owen R. Cheatham Professor, University of Virginia, USA";
    $person['imgurl'] = "images/mary-lous-offa-small.jpg";
    $person['homepage'] = "http://www.cs.virginia.edu/~soffa/";
    $people[] = $person;

    $person['name'] = "Ian Sommerville";
    $person['desc'] = "Professor of Software Engineering, St Andrews University, UK";
    $person['imgurl'] = "images/ian-sommerville-small.jpg";
    $person['homepage'] = "http://www.cs.st-andrews.ac.uk/~ifs/";
    $people[] = $person;

    $contentinfo['maincolumn'] .= genPeopleList($people, 80);

    $contentinfo['maincolumn'] .=<<<ENDHTML

	<p>We envisage that the discussion led by this distinguished panel will help to inform the direction that the 
	SBSE community takes as it continues to grow and mature.  Position statements from the panellists will be 
	published on the on this website in advance of the symposium as well as in the conference proceedings.  
	We encourage attendees to participate in this discussion at the symposium itself, and through the submission of fast 
	abstracts detailing their positions on key SBSE themes.</p>

ENDHTML;

    echo genPage($contentinfo);
?>


   </div> <!-- end main column -->
</div> <!-- end main container -->    <div class="clearboth">&nbsp;</div>
</div> <!-- end content -->
<div id="footer">
   <a href="http://www.provincia.benevento.it/"><img src="images/2010/Stemma_Provincia_di_BeneventoLOGO.png" alt="The Province of Benevento, Italy" height="150" /></a>
   <a href="http://www.unisannio.it/"><img src="images/2010/stemma.gif" alt="The University of Sannio, Italy" height="150" /></a><br/>
   <a href="http://www.york.ac.uk/"><img src="images/2010/YorkLogo.png" alt="The University of York, UK"/></a> <br />
   <a href="http://simula.no/"><img src="images/2010/simula_logo.png" alt="Simula Research Laboratory, Norway" width="380"/></a>
</div>
</div> <!-- end page -->
</body>
</html>
