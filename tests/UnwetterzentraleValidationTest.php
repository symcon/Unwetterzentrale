<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class UnwetterZentraleValidationTest extends TestCaseSymconValidation
{
    public function testValidateUnwetterzentrale(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateRainCentralModule(): void
    {
        $this->validateModule(__DIR__ . '/../RainCentral');
    }
}