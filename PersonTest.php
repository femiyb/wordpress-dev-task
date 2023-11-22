<?php

class PersonTest extends \PHPUnit\Framework\TestCase {
    public function testGetFullName() {
        $person = new Person('John', 'Doe');
        $this->assertEquals('John Doe', $person->getFullName());
    }
}
