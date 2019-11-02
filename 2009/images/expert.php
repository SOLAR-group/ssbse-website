---
title: "Software Engineering Experts' Panel: The Status and Future of SBSE in the Software Engineering Community"
---

        <p>We are very pleased to announce a special panel discussion as part of the symposium program.  
	Five world-leading experts on software engineering will discuss the current state of search-based
	software engineering research, identify challenges to the research agenda, and assess the potential 
	impact of SBSE on software engineering practice. </p>

	<p>The panellists are:</p>

ENDHTML;

    $people = array();

    $person['name'] = "Norman Fenton";
    $person['desc'] = "Professor of Computer Science, Queen Mary, University of London, UK";
    $person['imgurl'] = "/images/norman-fenton-small.jpg";
    $person['homepage'] = "http://www.dcs.qmul.ac.uk/~norman/";
    $people[] = $person;

    $person['name'] = "Anthony Finkelstein";
    $person['desc'] = "Professor of Software Systems Engineering, University College London, UK";
    $person['imgurl'] = "/images/anthony-finkelstein-small.jpg";
    $person['homepage'] = "http://www.cs.ucl.ac.uk/staff/A.Finkelstein";
    $people[] = $person;

    $person['name'] = "Paolo Inveradi";
    $person['desc'] = "Professor, Universit&agrave;  dell'Aquila, Italy";
    $person['imgurl'] = "/images/paolo-inveradi-small.jpg";
    $person['homepage'] = "http://www.di.univaq.it/inverard/paola.html";
    $people[] = $person;

    $person['name'] = "Mary Lou Soffa";
    $person['desc'] = "Owen R. Cheatham Professor, University of Virginia, USA";
    $person['imgurl'] = "/images/mary-lous-offa-small.jpg";
    $person['homepage'] = "http://www.cs.virginia.edu/~soffa/";
    $people[] = $person;

    $person['name'] = "Ian Sommerville";
    $person['desc'] = "Professor of Software Engineering, St Andrews University, UK";
    $person['imgurl'] = "/images/ian-sommerville-small.jpg";
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
