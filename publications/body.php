<?php
	require_once('./bibtex2html.php');
	$pub_str = "---\nlayout: page \ntitle: \"Publications\" \ndescription: \"Scientific publications\" \n--- \n\n";
	$pub_str = $pub_str . '<a target="_blank" href="http://www.informatik.uni-trier.de/%7Eley/db/indices/a-tree/m/Mu=ntilde=oz:Emir.html">Emir@DBLP</a> <br>';
	$pub_str = $pub_str . '<a target="_blank" href="http://scholar.google.com/citations?user=ofdUXHIAAAAJ">Emir@GoogleScholar</a> <br>';
	$pub_str = $pub_str . '<a target="_blank" href="https://www.researchgate.net/profile/Emir_Munoz/">Emir@ResearchGate</a> <br>';
	//$pub_str = $pub_str . '<a target="_blank" href="http://www.deri.ie/about/team/member/emir_munoz">Emir@DERI</a> <br>';
        $pub_str = $pub_str . '<br><span class="sc">Colors</span>: <span class="journal">journal</span> | <span class="conference">conference</span> <br>';
	$pub_str = $pub_str . '<br>';
	$types = array(	'phdthesis' => 'PhD Thesis',
					'mastersthesis' => 'Master&rsquo;s Thesis',
					'book' => 'Books',
					'inbook' => 'Book chapters',
					'article' => 'Articles',
					'incollection' => 'Articles',
					'inproceedings' => 'In Proceedings',
					'misc' => 'Misc',
					'techreport' => 'Technical Reports'
					); // 'unpublished' => 'Submitted Papers'
	$pub_str = $pub_str . bibfile2html(	'./emir.bib', //input file
										$types, //displayTypes
										false, //groupType
										true, //groupYear
										NULL, //bibLink
										'Mu&ntilde;oz', //highlightName
                              false
										);
	//$pub_str = $pub_str . '<h3>Presentations</h3><div><iframe width="615" height="470" src="http://www.slideshare.net/emispy/slideshelf">t</iframe></div>';
	
	//$javascript = "<script>jQuery(document).ready(function(){jQuery('.toggle').live('click', function(event) { var div = $(this).attr('title'); $('body').find('#'+div).toggle('show'); }); });</script>";
	//$pub_str .= $javascript;
	
	file_put_contents('./index.html', $pub_str);
	echo "File publications/index.html generated succesfully!\n";
?>
