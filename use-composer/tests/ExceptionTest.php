<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(\http\Exception\InvalidArgumentException::class);
    }
}