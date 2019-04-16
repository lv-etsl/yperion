<?php

// New Dom Object
$dom = new DomDocument;

// Load $content as string
$dom->loadHTML($content);

// Get only a elements
$elements = $dom->getElementsByTagName('a');

// Loop through each a element and get it's href value
for ($n = 0; $n < $elements->length; $n++) {
    $item = $elements->item($n);

    // Get old href val
    $old_href = $item->getAttribute('href');

    // New href val
    $new_href = 'javascript:myfunc(\''.$old_href.'\')';

    // Replace old href with new
    $content = str_replace($old_href,$new_href,$content);
}

// Print results
echo $content;
