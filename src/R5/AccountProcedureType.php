<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountProcedureType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.Procedure
 */
class AccountProcedureType extends BackboneElementType
{

    /**
     * Ranking of the procedure (for each type).
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The procedure relevant to the account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     */
    private $code = null;

    /**
     * Date of the procedure when using a coded procedure. If using a reference to a procedure, then the date on the procedure should be used.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateOfService
     */
    private $dateOfService = null;

    /**
     * How this procedure value should be used in charging the account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packageCode
     */
    private $packageCode = null;

    /**
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $device
     */
    private $device = null;

    /**
     * Gets as sequence
     *
     * Ranking of the procedure (for each type).
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Ranking of the procedure (for each type).
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as code
     *
     * The procedure relevant to the account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The procedure relevant to the account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableReferenceType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as dateOfService
     *
     * Date of the procedure when using a coded procedure. If using a reference to a procedure, then the date on the procedure should be used.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateOfService()
    {
        return $this->dateOfService;
    }

    /**
     * Sets a new dateOfService
     *
     * Date of the procedure when using a coded procedure. If using a reference to a procedure, then the date on the procedure should be used.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateOfService
     * @return self
     */
    public function setDateOfService(?\TKusy\Hl7Fhir\R5\DateTimeType $dateOfService = null)
    {
        $this->dateOfService = $dateOfService;
        return $this;
    }

    /**
     * Adds as type
     *
     * How this procedure value should be used in charging the account.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * How this procedure value should be used in charging the account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * How this procedure value should be used in charging the account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * How this procedure value should be used in charging the account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * How this procedure value should be used in charging the account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as packageCode
     *
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $packageCode
     */
    public function addToPackageCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $packageCode)
    {
        $this->packageCode[] = $packageCode;
        return $this;
    }

    /**
     * isset packageCode
     *
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageCode($index)
    {
        return isset($this->packageCode[$index]);
    }

    /**
     * unset packageCode
     *
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageCode($index)
    {
        unset($this->packageCode[$index]);
    }

    /**
     * Gets as packageCode
     *
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPackageCode()
    {
        return $this->packageCode;
    }

    /**
     * Sets a new packageCode
     *
     * The package code can be used to group procedures that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packageCode
     * @return self
     */
    public function setPackageCode(array $packageCode = null)
    {
        $this->packageCode = $packageCode;
        return $this;
    }

    /**
     * Adds as device
     *
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\ReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Any devices that were associated with the procedure relevant to the account.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
    {
        $this->device = $device;
        return $this;
    }


}

