<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceUdiCarrierType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.UdiCarrier
 */
class DeviceUdiCarrierType extends BackboneElementType
{

    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     *
     * @var \TKusy\Hl7FhirR4\StringType $deviceIdentifier
     */
    private $deviceIdentifier = null;

    /**
     * Organization that is charged with issuing UDIs for devices. For example, the US FDA issuers include :
     * 1) GS1: 
     * http://hl7.org/fhir/NamingSystem/gs1-di, 
     * 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 
     * 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
     * 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @var \TKusy\Hl7FhirR4\UriType $issuer
     */
    private $issuer = null;

    /**
     * The identity of the authoritative source for UDI generation within a jurisdiction. All UDIs are globally unique within a single namespace with the appropriate repository uri as the system. For example, UDIs of devices managed in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @var \TKusy\Hl7FhirR4\UriType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID. Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $carrierAIDC
     */
    private $carrierAIDC = null;

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     *
     * @var \TKusy\Hl7FhirR4\StringType $carrierHRF
     */
    private $carrierHRF = null;

    /**
     * A coded entry to indicate how the data was entered.
     *
     * @var \TKusy\Hl7FhirR4\UDIEntryType $entryType
     */
    private $entryType = null;

    /**
     * Gets as deviceIdentifier
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * Sets a new deviceIdentifier
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     *
     * @param \TKusy\Hl7FhirR4\StringType $deviceIdentifier
     * @return self
     */
    public function setDeviceIdentifier(\TKusy\Hl7FhirR4\StringType $deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * Organization that is charged with issuing UDIs for devices. For example, the US FDA issuers include :
     * 1) GS1: 
     * http://hl7.org/fhir/NamingSystem/gs1-di, 
     * 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 
     * 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
     * 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * Organization that is charged with issuing UDIs for devices. For example, the US FDA issuers include :
     * 1) GS1: 
     * http://hl7.org/fhir/NamingSystem/gs1-di, 
     * 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 
     * 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
     * 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @param \TKusy\Hl7FhirR4\UriType $issuer
     * @return self
     */
    public function setIssuer(\TKusy\Hl7FhirR4\UriType $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * The identity of the authoritative source for UDI generation within a jurisdiction. All UDIs are globally unique within a single namespace with the appropriate repository uri as the system. For example, UDIs of devices managed in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * The identity of the authoritative source for UDI generation within a jurisdiction. All UDIs are globally unique within a single namespace with the appropriate repository uri as the system. For example, UDIs of devices managed in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @param \TKusy\Hl7FhirR4\UriType $jurisdiction
     * @return self
     */
    public function setJurisdiction(\TKusy\Hl7FhirR4\UriType $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as carrierAIDC
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID. Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }

    /**
     * Sets a new carrierAIDC
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID. Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $carrierAIDC
     * @return self
     */
    public function setCarrierAIDC(\TKusy\Hl7FhirR4\Base64BinaryType $carrierAIDC)
    {
        $this->carrierAIDC = $carrierAIDC;
        return $this;
    }

    /**
     * Gets as carrierHRF
     *
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }

    /**
     * Sets a new carrierHRF
     *
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     *
     * @param \TKusy\Hl7FhirR4\StringType $carrierHRF
     * @return self
     */
    public function setCarrierHRF(\TKusy\Hl7FhirR4\StringType $carrierHRF)
    {
        $this->carrierHRF = $carrierHRF;
        return $this;
    }

    /**
     * Gets as entryType
     *
     * A coded entry to indicate how the data was entered.
     *
     * @return \TKusy\Hl7FhirR4\UDIEntryType
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Sets a new entryType
     *
     * A coded entry to indicate how the data was entered.
     *
     * @param \TKusy\Hl7FhirR4\UDIEntryType $entryType
     * @return self
     */
    public function setEntryType(\TKusy\Hl7FhirR4\UDIEntryType $entryType)
    {
        $this->entryType = $entryType;
        return $this;
    }


}

