<?php
	require_once('./bibtex2html.php');
	$pub_str = "---\nlayout: default\ntitle: \"Publications\"\ndescription: \"Scientific publications\"\n---\n\n";
	$types = array(	'article' => 'Articles',
					'book' => 'Books',
					'inbook' => 'Book chapters',
					'inproceedings' => 'In Proceedings',
					'mastersthesis' => "Master's Theses",
					'misc' => 'Misc',
					'phdthesis' => 'PhD Theses',
					'techreport' => 'Technical Reports'
					);
	$pub_str = $pub_str . bibfile2html(	'./emir.bib', //input file
										$types, //displayTypes
										true, //groupType
										true, //groupYear
										NULL, //bibLink
										'Mu&ntilde;oz' //highlightName
										); 
	file_put_contents('./index.html', $pub_str);
	echo "body.html generated!\n";
?>
