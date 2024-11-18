<?php

declare(strict_types=1);

namespace SergeyShirykalov\HashCalculator;

class HashCalculator
{
    public function md5(string $str): string
    {
        return md5($str);
    }
}