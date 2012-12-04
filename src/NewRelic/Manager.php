<?php
namespace NewRelic;

class Manager
{
    /**
     * @var string
     */
    protected $applicationName = null;

    /**
     * @var string
     */
    protected $applicationLicense = null;

    /**
     * @var boolean
     */
    protected $browserTimingEnabled;

    /**
     * @var boolean
     */
    protected $browserTimingAutoInstrument;

    /**
     * Returns true if newrelic extension is loaded
     *
     * @return boolean
     */
    protected function extensionLoaded()
    {
        return extension_loaded('newrelic');
    }

    /**
     * @param string $name
     * @return Manager
     */
    public function setApplicationName($name)
    {
        $this->applicationName = (string) $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * @param string $license
     * @return Manager
     */
    public function setApplicationLicense($license)
    {
        $this->applicationLicense = (string) $license;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationLicense()
    {
        return $this->applicationLicense;
    }

    /**
     * @param boolean $enabled
     * @return Manager
     */
    public function setBrowserTimingEnabled($enabled)
    {
        $this->browserTimingEnabled = (bool) $enabled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBrowserTimingEnabled()
    {
        return $this->browserTimingEnabled;
    }

    /**
     * @param boolean $enabled
     * @return Manager
     */
    public function setBrowserTimingAutoInstrument($enabled)
    {
        $this->browserTimingAutoInstrument = (bool) $enabled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBrowserTimingAutoInstrument()
    {
        return $this->browserTimingAutoInstrument;
    }
}