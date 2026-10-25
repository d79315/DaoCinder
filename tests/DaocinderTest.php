<?php
/**
 * Tests for DaoCinder
 */

use PHPUnit\Framework\TestCase;
use Daocinder\Daocinder;

class DaocinderTest extends TestCase {
    private Daocinder $instance;

    protected function setUp(): void {
        $this->instance = new Daocinder(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daocinder::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
