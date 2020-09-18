# Keyword Scraping Example using [PHPScraper](https://phpscraper.de)

[PHPScraper](https://github.com/spekulatius/PHPScraper) is a scraping library aimed at making web-scraping easier. It simplifies the coding effort involved by reducing verbosity.

This is an example of the library scraping keywords from the [Wikipedia article "Online Advertising"](https://en.wikipedia.org/wiki/Online_advertising). After the keyword extraction, the data is processed to analyze the distribution of keyword length. The expected output can be found below.

Within PHPScraper, the library [RAKE PHP Plus](https://github.com/Donatello-za/rake-php-plus) is used. RAKE stands for "Rapid Automatic Keyword Extraction" algorithm.

You can also check the [PHPScraper keyword extraction example](https://github.com/spekulatius/phpscraper-keyword-scraping-example).


## Installation

This example has been built on PHP 7.2.24 run on an Ubuntu-based Linux distro.

To run this example you will need to clone the repository and install the dependencies:

```bash
git clone git@github.com:spekulatius/phpscraper-keyword-scraping-example.git
composer install
```

If you would like to make changes you will need to fork the repository.

## Execution

```bash
$ php keyword-length-distribution.php
```


## Result

As graphic:

[![Keyword Length Distribution for "Online Marketing"](/images/chart.png)](https://quickchart.io/sandbox/#{%22type%22:%22line%22,%22data%22:{%22labels%22:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,51,52,53,54,55,56,57,59,61,66,67,70,71,76,77,81,84,85,93,97,99,106,107,110,120,121,123,142,148,156,159,166,169,174,191,193,195,201,205,229,252,269,280,288,308,332,392,408,473,506,1422,2184],%22datasets%22:[{%22fill%22:false,%22backgroundColor%22:%22rgb(54,%20162,%20235)%22,%22borderColor%22:%22rgb(54,%20162,%20235)%22,%22data%22:[7,5,46,95,80,84,129,137,117,103,91,71,76,58,82,71,72,76,51,57,40,33,45,34,21,29,29,17,22,17,17,11,11,10,11,8,7,10,10,3,5,4,5,4,5,2,3,2,2,3,3,3,1,2,3,2,1,1,1,1,1,1,2,1,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],%22pointRadius%22:0}]},%22options%22:{%22title%22:{%22display%22:false},%22legend%22:{%22display%22:false}}})

As text:

```
This page contains around 1989 keywords/phrases.
Below are some selected keyword extractions.

Length Distribution of Keywords:

Array
(
    [1] => 7
    [2] => 5
    [3] => 46
    [4] => 95
    [5] => 80
    [6] => 84
    [7] => 129
    [8] => 137
    [9] => 117
    [10] => 103
    [11] => 91
    [12] => 71
    [13] => 76
    [14] => 58
    [15] => 82
    [16] => 71
    [17] => 72
    [18] => 76
    [19] => 51
    [20] => 57
    [21] => 40
    [22] => 33
    [23] => 45
    [24] => 34
    [25] => 21
    [26] => 29
    [27] => 29
    [28] => 17
    [29] => 22
    [30] => 17
    [31] => 17
    [32] => 11
    [33] => 11
    [34] => 10
    [35] => 11
    [36] => 8
    [37] => 7
    [38] => 10
    [39] => 10
    [40] => 3
    [41] => 5
    [42] => 4
    [43] => 5
    [44] => 4
    [45] => 5
    [46] => 2
    [47] => 3
    [48] => 2
    [49] => 2
    [51] => 3
    [52] => 3
    [53] => 3
    [54] => 1
    [55] => 2
    [56] => 3
    [57] => 2
    [59] => 1
    [61] => 1
    [66] => 1
    [67] => 1
    [70] => 1
    [71] => 1
    [76] => 2
    [77] => 1
    [81] => 2
    [84] => 1
    [85] => 1
    [93] => 1
    [97] => 1
    [99] => 1
    [106] => 1
    [107] => 1
    [110] => 1
    [120] => 1
    [121] => 1
    [123] => 1
    [142] => 1
    [148] => 1
    [156] => 1
    [159] => 1
    [166] => 1
    [169] => 1
    [174] => 1
    [191] => 1
    [193] => 1
    [195] => 1
    [201] => 1
    [205] => 1
    [229] => 1
    [252] => 1
    [269] => 1
    [280] => 1
    [288] => 1
    [308] => 1
    [332] => 1
    [392] => 1
    [408] => 1
    [473] => 1
    [506] => 1
    [1422] => 1
    [2184] => 1
)

1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,51,52,53,54,55,56,57,59,61,66,67,70,71,76,77,81,84,85,93,97,99,106,107,110,120,121,123,142,148,156,159,166,169,174,191,193,195,201,205,229,252,269,280,288,308,332,392,408,473,506,1422,2184

7,5,46,95,80,84,129,137,117,103,91,71,76,58,82,71,72,76,51,57,40,33,45,34,21,29,29,17,22,17,17,11,11,10,11,8,7,10,10,3,5,4,5,4,5,2,3,2,2,3,3,3,1,2,3,2,1,1,1,1,1,1,2,1,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1
```

*Please note: These results might have changed by now.*
