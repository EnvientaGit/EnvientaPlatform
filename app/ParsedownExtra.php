<?php

namespace App;

class ParsedownExtra extends \Parsedown
{
	/*
	function __construct()
    {
        $this->InlineTypes['['][]= 'Embed';
    }

    protected function inlineEmbed($excerpt)
    {
        if (preg_match('/\[\[((?:[^][]++|(?R))*+)\]\]/', $excerpt['text'], $matches))
        {
        	return array(
                'extent' => strlen($matches[0]), 
                'element' => array(
                    'name' => 'a',
                    'text' => $matches[1],
                    'attributes' => array(
                    	'href' => $matches[1],
                        'class' => 'embedly-card',
                    ),
                ),

            );
        }
    }
    */

    protected function inlineImage($Excerpt)
    {
        if ( ! isset($Excerpt['text'][1]) or $Excerpt['text'][1] !== '[')
        {
            return;
        }

        $Excerpt['text']= substr($Excerpt['text'], 1);

        $Link = $this->inlineLink($Excerpt);

        if ($Link === null)
        {
            return;
        }

        $url = $Link['element']['attributes']['href'];
        $text = $Link['element']['text'];

        if(substr($url, -4) === '.stl') {
	        $Inline = array(
	            'extent' => $Link['extent'] + 1,
	            'markup' => '<div class="embedly-card"><div class="embedly-card-hug" style="max-width: 600px; padding: 0px; position: relative; min-width: 200px; margin: 5px auto;"><iframe src="https://www.viewstl.com/?embedded&url='. $url .'" style="border:0;margin:0;width:100%;height:100%;"></iframe></div></div>'
	        );        	
        } else {
	        $Inline = array(
	            'extent' => $Link['extent'] + 1,
	            'markup' => '<blockquote class="embedly-card"><h4><a href="' . $url . '">' . $text . '</a></h4><p>' . $text . '</p></blockquote>'
	        );        	
        }

        return $Inline;
    }

}