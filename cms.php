<?php
variables([
	'sections-have-files' => true,
	'link-to-section-home' => true,
]);

function before_file() {
	//do here so menu will still work
	if (sectionIs('primary'))
		variable('under-construction', true);
}
