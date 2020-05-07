<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptFixtureType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Fixture
 */
class TestScriptFixtureType extends BackboneElementType
{

    /**
     * Whether or not to implicitly create the fixture during setup. If true, the fixture is automatically created on each server being tested during setup, therefore no create operation is required for this fixture in the TestScript.setup section.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $autocreate
     */
    private $autocreate = null;

    /**
     * Whether or not to implicitly delete the fixture during teardown. If true, the fixture is automatically deleted on each server being tested during teardown, therefore no delete operation is required for this fixture in the TestScript.teardown section.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $autodelete
     */
    private $autodelete = null;

    /**
     * Reference to the resource (containing the contents of the resource needed for operations).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $resource
     */
    private $resource = null;

    /**
     * Gets as autocreate
     *
     * Whether or not to implicitly create the fixture during setup. If true, the fixture is automatically created on each server being tested during setup, therefore no create operation is required for this fixture in the TestScript.setup section.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAutocreate()
    {
        return $this->autocreate;
    }

    /**
     * Sets a new autocreate
     *
     * Whether or not to implicitly create the fixture during setup. If true, the fixture is automatically created on each server being tested during setup, therefore no create operation is required for this fixture in the TestScript.setup section.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $autocreate
     * @return self
     */
    public function setAutocreate(\TKusy\Hl7FhirR4\BooleanType $autocreate)
    {
        $this->autocreate = $autocreate;
        return $this;
    }

    /**
     * Gets as autodelete
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the fixture is automatically deleted on each server being tested during teardown, therefore no delete operation is required for this fixture in the TestScript.teardown section.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAutodelete()
    {
        return $this->autodelete;
    }

    /**
     * Sets a new autodelete
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the fixture is automatically deleted on each server being tested during teardown, therefore no delete operation is required for this fixture in the TestScript.teardown section.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $autodelete
     * @return self
     */
    public function setAutodelete(\TKusy\Hl7FhirR4\BooleanType $autodelete)
    {
        $this->autodelete = $autodelete;
        return $this;
    }

    /**
     * Gets as resource
     *
     * Reference to the resource (containing the contents of the resource needed for operations).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * Reference to the resource (containing the contents of the resource needed for operations).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\ReferenceType $resource)
    {
        $this->resource = $resource;
        return $this;
    }


}

