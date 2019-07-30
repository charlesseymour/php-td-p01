<?php

// PHP - Random Quote Generator

// Array of quotes for getRandomQuote function to draw from

$quotes = [
  [
    "quote" => "I have always imagined that Paradise will be a kind of library.",
    "source" => "Jorge Luis Borges"
  ],
  [
    "quote" => "A university is just a group of buildings gathered around a library.",
    "source" => "Shelby Foote"
  ],
  [
    "quote" => "I had found my religion: nothing seemed more important to me than a book. I saw the library as a temple.",
    "source" => "Jean Paul Sartre",
    "citation" => "The Words",
    "year" => 1963
  ],
  [
    "quote" => "When I have a house of my own, I shall be miserable if I have not an excellent library.",
    "source" => "Jane Austen",
    "citation" => "Pride and Prejudice",
    "year" => 1813
  ],
  [
    "quote" => "Me, poor man, my library was dukedom large enough.",
    "source" => "William Shakespeare",
    "citation" => "The Tempest",
    "year" => 1611
  ]
];


// Get a random quote from the $quotes array

function getRandomQuote($array) {
  $index = rand(0, count($array) - 1);
  return $array[$index];
}

// Generate HTML to display the quote

function printQuote($array) {
  $quote = getRandomQuote($array);
  $html = "";
  $html .= "<p class=\"quote\">$quote[quote]</p>";
  $html .= "<p class=\"source\">$quote[source]";
  if (isset($quote["citation"])) {
    $html .= "<span class=\"citation\">$quote[citation]</span>";
  };
  if (isset($quote["year"])) {
    $html .= "<span class=\"year\">$quote[year]</span>";
  };
  $html .= "</p>";
  echo($html);
}

?>
