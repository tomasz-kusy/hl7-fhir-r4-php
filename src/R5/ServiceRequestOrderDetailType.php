<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ServiceRequestOrderDetailType
 *
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.
 * XSD Type: ServiceRequest.OrderDetail
 */
class ServiceRequestOrderDetailType extends BackboneElementType
{

    /**
     * Indicates the context of the order details by reference.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $parameterFocus
     */
    private $parameterFocus = null;

    /**
     * The parameter details for the service being requested.
     *
     * @var \TKusy\Hl7Fhir\R5\ServiceRequestParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * Gets as parameterFocus
     *
     * Indicates the context of the order details by reference.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getParameterFocus()
    {
        return $this->parameterFocus;
    }

    /**
     * Sets a new parameterFocus
     *
     * Indicates the context of the order details by reference.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $parameterFocus
     * @return self
     */
    public function setParameterFocus(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $parameterFocus = null)
    {
        $this->parameterFocus = $parameterFocus;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * The parameter details for the service being requested.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\ServiceRequestParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * The parameter details for the service being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * The parameter details for the service being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * The parameter details for the service being requested.
     *
     * @return \TKusy\Hl7Fhir\R5\ServiceRequestParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * The parameter details for the service being requested.
     *
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

