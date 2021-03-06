<?php

namespace EquipTests\Configuration;

use Auryn\Injector;
use Relay\ResolverInterface;
use Equip\Configuration\AurynConfiguration;
use Equip\Resolver\AurynResolver;

class AurynConfigurationTest extends ConfigurationTestCase
{
    protected function getConfigurations()
    {
        return [
            new AurynConfiguration,
        ];
    }

    public function testApply()
    {
        $resolver = $this->injector->make(ResolverInterface::class);
        $this->assertInstanceOf(AurynResolver::class, $resolver);

        // Injector is not a singleton
        $injector = $this->injector->make(Injector::class);
        $this->assertNotSame($injector, $this->injector);
    }
}
