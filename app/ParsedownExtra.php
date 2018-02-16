<?php

namespace App;

class ParsedownExtra extends \Parsedown
{
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
}