<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing LocationPositionType
 *
 * Details and position information for a place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * XSD Type: Location.Position
 */
class LocationPositionType extends BackboneElementType
{

    /**
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes on Location main page).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $longitude
     */
    private $longitude = null;

    /**
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes on Location main page).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $latitude
     */
    private $latitude = null;

    /**
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes on Location main page).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $altitude
     */
    private $altitude = null;

    /**
     * Gets as longitude
     *
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes on Location main page).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes on Location main page).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $longitude
     * @return self
     */
    public function setLongitude(\TKusy\Hl7Fhir\R5\DecimalType $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes on Location main page).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes on Location main page).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $latitude
     * @return self
     */
    public function setLatitude(\TKusy\Hl7Fhir\R5\DecimalType $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as altitude
     *
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes on Location main page).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Sets a new altitude
     *
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes on Location main page).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $altitude
     * @return self
     */
    public function setAltitude(?\TKusy\Hl7Fhir\R5\DecimalType $altitude = null)
    {
        $this->altitude = $altitude;
        return $this;
    }


}

