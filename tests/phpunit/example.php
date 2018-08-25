<?php
use PHPUnit\Framework\TestCase;

final class DavePHPUnitTest extends TestCase
{
    public function testEquals(): void
    {
        $this->assertEquals('foo', 'foo');
        // $this->assertEquals('foo', 'bar');
    }
}
