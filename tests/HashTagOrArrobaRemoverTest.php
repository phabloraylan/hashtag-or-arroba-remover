<?php

namespace Tests;

use \HashtagOrArrobaRemover\HashtagOrArrobaRemover;

class HashTagOrArrobaRemoverTest extends TestCase
{
    public function  testIsHashtag()
    {
        $hashtagOrArrobaRemover = new HashtagOrArrobaRemover;
        $str = "#test";
        $this->assertEquals(HashtagOrArrobaRemover::HASHTAG, $hashtagOrArrobaRemover->getFirstLetter($str));
    }

    public function  testIsArroba()
    {
        $hashtagOrArrobaRemover = new HashtagOrArrobaRemover;
        $str = "@test";
        $this->assertEquals(HashtagOrArrobaRemover::ARROBA, $hashtagOrArrobaRemover->getFirstLetter($str));
    }

    public function  testToRemoveArroba()
    {
        $hashtagOrArrobaRemover = new HashtagOrArrobaRemover;
        $str = "@test";
        $this->assertEquals("test", $hashtagOrArrobaRemover->toRemoveArroba($str));
    }

    public function  testToRemoveHashTag()
    {
        $hashtagOrArrobaRemover = new HashtagOrArrobaRemover;
        $str = "#test";
        $this->assertEquals("test", $hashtagOrArrobaRemover->toRemoveHashTag($str));
    }

    public function testToRemoveSymbolArroba()
    {
        $str = "@test";
        $this->assertEquals("test", HashtagOrArrobaRemover::toRemoveSymbol($str));
    }

    public function testToRemoveSymbolHashtag()
    {
        $str = "#test";
        $this->assertEquals("test", HashtagOrArrobaRemover::toRemoveSymbol($str));
    }

    public function testWithoutSymbol()
    {
        $str = "test";
        $this->assertEquals("test", HashtagOrArrobaRemover::toRemoveSymbol($str));
    }
}
