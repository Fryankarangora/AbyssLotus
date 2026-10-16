<?php
/**
 * Tests for AbyssLotus
 */

use PHPUnit\Framework\TestCase;
use Abysslotus\Abysslotus;

class AbysslotusTest extends TestCase {
    private Abysslotus $instance;

    protected function setUp(): void {
        $this->instance = new Abysslotus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Abysslotus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
