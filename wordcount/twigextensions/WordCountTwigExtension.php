<?php  
namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

class WordCountTwigExtension extends Twig_Extension  
{
    public function getName()
    {
        return 'WordCount';
    }

    public function getFilters()
    {
        return array(
            'wordCount' => new Twig_Filter_Method($this, 'wordCount'),
        );
    }

    public function wordCount($content)
    {
        $content = strip_tags($content);
        $content = str_replace("\n", ' ', $content);
        $content = preg_replace("/\s+/", ' ', $content);
        $content = trim($content);
        
        $words = explode(' ', $content);
        
        return count($words);
    }
}