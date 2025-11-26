<?php
addStyle('styles');

variables([
	'sections-have-files' => true,
	'link-to-section-home' => true,
	'sections-class' => ' d-inline-block m-1 bg-light btn btn-outline-info',
]);

if (nodeIs(SITEHOME))
	variable('custom-heading', replaceHtml('<div class="bg-light rounded-5 row m-2 p-2 text-center">
		<div class="col-sm-3" style="min-width: 150px;">
			<a href="%url%" class="btn btn-outline-info bg-info"><img class="img-fluid" style="" src="%url%%safeName%-icon.png" /></a></div>
		<div class="col align-self-center"><h2 class="m-0">%siteName%</h2>'
			. runAllMacros('%contact-snippet%') . '</a><br /></div></div>
		<div class="m-2 p-2 bg-light text-center">'
			. runAllMacros(replaceIfContained('%welcome-message%', 'welcome-message')) . '</a></div>'));

function before_file() {
	//do here so menu will still work
	if (sectionIs('primary'))
		variable('under-construction', true);
}
