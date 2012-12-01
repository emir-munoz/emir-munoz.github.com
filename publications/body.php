<?php
	require_once('./bibtex2html.php');
	$pub_str = "---\nlayout: page \ntitle: \"Publications\" \ndescription: \"Scientific publications\" \n--- \n\n";
	$pub_str = $pub_str . '<a target="_blank" href="http://www.informatik.uni-trier.de/%7Eley/db/indices/a-tree/m/Mu=ntilde=oz:Emir.html">Emir@DBLP</a> <br>';
	$pub_str = $pub_str . '<a target="_blank" href="http://scholar.google.com/citations?user=ofdUXHIAAAAJ">Emir@GoogleScholar</a> <br><br>';
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
	//$pub_str = $pub_str . '<h3>Presentations</h3><div><iframe width="615" height="470" src="http://www.slideshare.net/emispy/slideshelf">t</iframe></div>';
	file_put_contents('./index.html', $pub_str);
	echo "index.html file generated!\n";
?>
