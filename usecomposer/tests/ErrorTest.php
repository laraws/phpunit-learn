<?php declare(strict_types=1);
namespace Usecomposer\Tests;
use PHPUnit\Framework\TestCase;

final class ErrorTest extends TestCase
{
    public function testDeprecationCanBeExpected(): void
    {
        $this->expectDeprecation();

        // Optionally test that the message is equal to a string
        $this->expectDeprecationMessage('foo');

        // Or optionally test that the message matches a regular expression
        $this->expectDeprecationMessageMatches('/foo/');

        \trigger_error('foo', \E_USER_DEPRECATED);
    }
}