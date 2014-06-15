<?php

$wordcount = "  text+headers+captions (#headers/#floats/#inlines/#displayed)
  101+1+0 (1/0/0/0) Section: Introduction
  21+1+4 (1/0/0/0) Section: Torrenting
  71+1+6 (1/1/0/0) Subsection: Popularity
  101+1+19 (1/2/0/0) Subsection: Technology
  21+3+0 (1/0/0/0) Section: Intellectual Property Rights
  71+2+5 (1/0/0/0) Subsection: Legal Options
  132+3+44 (1/0/0/0) Subsection: In the UK
  126+7+10 (1/1/0/0) Subsection: Keeping Intellectual Property Laws Up to Date
  68+3+13 (1/1/0/0) Section: Effect of Torrenting
  105+2+84 (1/3/0/0) Subsection: Negative Effects
  154+1+26 (1/0/0/0) Subsection: Opposition
  68+4+0 (1/0/0/0) Section: Blocks in the UK
  110+2+0 (1/0/0/0) Subsection: Supporting Evidence
  219+2+36 (1/1/0/0) Subsection: Opposing Evidence
  276+1+0 (1/0/0/0) Section: Conclusions";

$matches = array();
preg_match_all('#(\d+)\+(?:.*)ion: (.*)#', $wordcount, $matches);

foreach($matches[1] as $key => $count) {
	echo $matches[2][$key] . "\t" . $count . "\n";
}
