<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing LocationPositionType
 *
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * XSD Type: Location.Position
 */
class LocationPositionType extends BackboneElementType
{

    /**
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     *
     * @var float $longitude
     */
    private $longitude = null;

    /**
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     *
     * @var float $latitude
     */
    private $latitude = null;

    /**
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     *
     * @var float $altitude
     */
    private $altitude = null;

    /**
     * Gets as longitude
     *
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as altitude
     *
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     *
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Sets a new altitude
     *
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     *
     * @param float $altitude
     * @return self
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
        return $this;
    }


}

