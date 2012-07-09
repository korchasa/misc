<?php

class DokuwikiConverter
{
  function convert($content)
  {
    $content = $this->escapeCodeAndPreformatedContent($content);

    $content = $this->makeCommonReplacements($content);
    $content = $this->convertLinks($content);
    $content = $this->convertImages($content);
    $content = $this->convertCodeContainers($content);
    $content = $this->convertNoWikiTag($content);

    $content = $this->unescapeCodeAndPreformatedContent($content);

    return $content;
  }

  function escapeCodeAndPreformatedContent($content)
  {
    return $content;
  }

  function unescapeCodeAndPreformatedContent($content)
  {
    return $content;
  }

  function makeCommonReplacements($content)
  {
    $replaces = array(
      '======' => '#',
      '=====' => '##',
      '====' => '###',
      '===' => '####',
      '==' => '#####',
      '=' => '######',
      '//' => '*',
      '>>' => '> >',
      '\'\'' => '`',
    );
    return str_replace(array_keys($replaces), array_values($replaces), $content);
  }

  function convertLinks($content)
  {
    return preg_replace_callback(
      '/\[\[([^\].]*)\]\]/',
      function($match) {
        $link_str = $match[1];
        if(false === strpos($link_str, '|'))
        {
          $namespace_delim_position = strrpos($link_str, ":");
          if(false === $namespace_delim_position)
            $title = $link_str;
          else
            $title = substr($link_str, $namespace_delim_position + 1);
          $url = $link_str;
        }
        else
        {
          list($url, $title) = explode('|', $link_str);
        }

        $url = str_replace(':', '/', $url);

        return "[$title]($url)";
      },
      $content
    );
  }

  function convertImages($content)
  {
    return preg_replace_callback(
      '/\{\{([^\}.]*)\}\}/',
      function ($match) {
        var_dump($match);
      },
      $content
    );
  }

  function convertCodeContainers($content)
  {
    return preg_replace_callback(
      '/<code[^>.]*>([^<.]*)<code>/sm',
      function ($match) {
        return '    '.$match[1];
      },
      $content
    );

  }

  function convertNoWikiTag($content)
  {
    return $content;
  }
}
