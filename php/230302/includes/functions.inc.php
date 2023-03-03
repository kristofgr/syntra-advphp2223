<?php

function getFeed($rss_url) {
  // Fetch the RSS feed and parse it
  $rss_feed = simplexml_load_file($rss_url);

  // Transform the feed items into an array of objects
  $items = array();
  
  foreach ($rss_feed->channel->item as $item) {

    print '<pre>';
    print_r($item);
    exit;

    $items[] = (object)array(
      'image' => (string)$item->enclosure ,
      'title' => (string)$item->title,
      'link' => (string)$item->link,
      'description' => strip_tags(trim((string)$item->description)),
      'pubDate' => (string)$item->pubDate
    );
  }

  return $items;

}