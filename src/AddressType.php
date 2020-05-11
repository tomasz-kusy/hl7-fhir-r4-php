<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AddressType
 *
 * An address expressed using postal conventions (as opposed to GPS or other location definition formats). This data type may be used to convey addresses for use in delivering mail as well as for visiting locations which might not be valid for mail delivery. There are a variety of postal address formats defined around the world.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Address
 */
class AddressType extends ElementType
{

    /**
     * The purpose of this address.
     *
     * @var \TKusy\Hl7FhirR4\AddressUseType $use
     */
    private $use = null;

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @var \TKusy\Hl7FhirR4\AddressTypeType $type
     */
    private $type = null;

    /**
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $line
     */
    private $line = [
        
    ];

    /**
     * The name of the city, town, suburb, village or other community or delivery center.
     *
     * @var \TKusy\Hl7FhirR4\StringType $city
     */
    private $city = null;

    /**
     * The name of the administrative area (county).
     *
     * @var \TKusy\Hl7FhirR4\StringType $district
     */
    private $district = null;

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @var \TKusy\Hl7FhirR4\StringType $state
     */
    private $state = null;

    /**
     * A postal code designating a region defined by the postal service.
     *
     * @var \TKusy\Hl7FhirR4\StringType $postalCode
     */
    private $postalCode = null;

    /**
     * Country - a nation as commonly understood or generally accepted.
     *
     * @var \TKusy\Hl7FhirR4\StringType $country
     */
    private $country = null;

    /**
     * Time period when address was/is in use.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as use
     *
     * The purpose of this address.
     *
     * @return \TKusy\Hl7FhirR4\AddressUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * The purpose of this address.
     *
     * @param \TKusy\Hl7FhirR4\AddressUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\AddressUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as type
     *
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @return \TKusy\Hl7FhirR4\AddressTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @param \TKusy\Hl7FhirR4\AddressTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\AddressTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as text
     *
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
     *
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as line
     *
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $line
     */
    public function addToLine(\TKusy\Hl7FhirR4\StringType $line)
    {
        $this->line[] = $line;
        return $this;
    }

    /**
     * isset line
     *
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLine($index)
    {
        return isset($this->line[$index]);
    }

    /**
     * unset line
     *
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLine($index)
    {
        unset($this->line[$index]);
    }

    /**
     * Gets as line
     *
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * This component contains the house number, apartment number, street name, street direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $line
     * @return self
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * Gets as city
     *
     * The name of the city, town, suburb, village or other community or delivery center.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * The name of the city, town, suburb, village or other community or delivery center.
     *
     * @param \TKusy\Hl7FhirR4\StringType $city
     * @return self
     */
    public function setCity(\TKusy\Hl7FhirR4\StringType $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as district
     *
     * The name of the administrative area (county).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * The name of the administrative area (county).
     *
     * @param \TKusy\Hl7FhirR4\StringType $district
     * @return self
     */
    public function setDistrict(\TKusy\Hl7FhirR4\StringType $district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as state
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @param \TKusy\Hl7FhirR4\StringType $state
     * @return self
     */
    public function setState(\TKusy\Hl7FhirR4\StringType $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * A postal code designating a region defined by the postal service.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param \TKusy\Hl7FhirR4\StringType $postalCode
     * @return self
     */
    public function setPostalCode(\TKusy\Hl7FhirR4\StringType $postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as country
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param \TKusy\Hl7FhirR4\StringType $country
     * @return self
     */
    public function setCountry(\TKusy\Hl7FhirR4\StringType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period when address was/is in use.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Time period when address was/is in use.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

