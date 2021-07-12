<?php
$your_google_calendar="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23aff7f1&amp;ctz=America%2FNew_York&amp;src=dml2aWFuY2hlbmcyNjdAZ21haWwuY29t&amp;src=dml2aWFuQHVyYmFuaW1wYWN0bGFiLmNvbQ&amp;color=%23bab2cc&amp;color=%23009688&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=1&amp;showTz=1&amp;showDate=1&amp;showNav=1&amp;showTabs=1";

$url= parse_url($your_google_calendar);
$google_domain = $url['scheme'].'://'.$url['host'];

// Load and parse Google's raw calendar
$dom = new DOMDocument;
$dom->loadHTMLfile($your_google_calendar);

// Create a link to a new CSS file called schedule.min.css
$element = $dom->createElement('link');
$element->setAttribute('type', 'text/css');
$element->setAttribute('rel', 'stylesheet');
$element->setAttribute('href', '/css/schedule.min.css');

// Change Google's JS file to use absolute URLs
$scripts = $dom->getElementsByTagName('script');

foreach ($scripts as $script) {
	$js_src = $script->getAttribute('src');

	if ($js_src) {
		$parsed_js = parse_url($js_src, PHP_URL_HOST);
		if (!$parsed_js) {
			$script->setAttribute('src', $google_domain . $js_src);
		}
	}
}

// Append this link at the end of the element
$head = $dom->getElementsByTagName('head')->item(0);
$head->appendChild($element);

// Remove old stylesheet
$oldcss = $dom->documentElement;
$link = $oldcss->getElementsByTagName('link')->item(0);
$head->removeChild($link);

// Export the HTML
echo $dom->saveHTML();
?>;
