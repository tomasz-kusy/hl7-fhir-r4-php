<?php

namespace TKusy\HL7Fhir;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

class R4Serializer
{
    public function getSerializerBuilder()
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__ . '/R4Metadata', 'TKusy\Hl7Fhir\R4');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        return $serializerBuilder;
    }
}
