<?php

require 'vendor/autoload.php';

$url = 'https://en.wikipedia.org/wiki/Online_advertising';

// Instantiate the library
$web = new \spekulatius\phpscraper();

// Navigate to the test page.
$web->go($url);

// check the number of keywords.
$keywords = $web->contentKeywordsWithScores;
echo "This page contains around " . count($keywords) . " keywords/phrases.\nBelow are some selected keyword extractions.";

echo "\n\nLength Distribution of Keywords:\n\n";
$length_distribution = [];
foreach ($keywords as $keyword => $score) {
    $length_distribution[strlen($keyword)] = isset($length_distribution[strlen($keyword)]) ?
        $length_distribution[strlen($keyword)] + 1 : 1;
}
ksort($length_distribution);
print_r($length_distribution);

echo join(',', array_keys($length_distribution))."\n\n";
echo join(',', array_values($length_distribution))."\n\n";

