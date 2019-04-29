<?php
namespace App\Services;
use Michelf\MarkdownExtra;
use Michelf\SmartyPants;
class Markdowner
{
    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    public function preTransformText($text)
    {
        return $text;
    }
    public function postTransformText($text)
    {
        return $text;
    }
}