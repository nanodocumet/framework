<?php
namespace EquipTests\Configuration;

use Relay\Relay;
use Equip\Configuration\AurynConfiguration;
use Equip\Configuration\RelayConfiguration;

class RelayConfigurationTest extends ConfigurationTestCase
{
    protected function getConfigurations()
    {
        return [
            new AurynConfiguration,
            new RelayConfiguration,
        ];
    }

    public function testApply()
    {
        $dispatcher = $this->injector->make(Relay::class);

        $this->assertInstanceOf(Relay::class, $dispatcher);
    }
}
