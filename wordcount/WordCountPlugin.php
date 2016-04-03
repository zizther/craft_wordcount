<?php
namespace Craft;
class WordCountPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Word Count');
    }
    public function getVersion()
    {
        return '1.0.0';
    }
    public function getDeveloper()
    {
        return 'Vimia';
    }
    public function getDeveloperUrl()
    {
        return 'http://www.vimia.co.uk';
    }
    public function getPluginUrl()
    {
        return 'https://github.com/zizther/craft_wordcount';
    }
    public function getDocumentationUrl()
    {
        return $this->getPluginUrl() . '/blob/master/README.md';
    }
    public function addTwigExtension()  
    {
        Craft::import('plugins.wordcount.twigextensions.WordCountTwigExtension');
    
        return new WordCountTwigExtension();
    }
}