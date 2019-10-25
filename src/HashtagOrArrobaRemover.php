<?php

namespace HashtagOrArrobaRemover;

use Stringy\Stringy as S;

class HashtagOrArrobaRemover
{
    const HASHTAG = "#";
    const ARROBA = "@";
    public static function toRemoveSymbol($str)
    {
        $self = new HashtagOrArrobaRemover;
        $first_letter = $self->getFirstLetter($str);

        if ($first_letter == $self::HASHTAG) {
            return $self->toRemoveHashtag($str);
        } elseif ($first_letter == self::ARROBA) {
            return $self->toRemoveArroba($str);
        }

        return $str;
    }

    public function toRemoveArroba($str)
    {
        $stringy = S::create($str);
        return $stringy->removeLeft(self::ARROBA);
    }

    public function toRemoveHashtag($str)
    {
        $stringy = S::create($str);
        return $stringy->removeLeft(self::HASHTAG);
    }

    public function getFirstLetter($str)
    {
        $stringy = S::create($str);
        $first_letter = $stringy->first(1);
        return $first_letter;
    }
}
