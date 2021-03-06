<?php
/**
 * File for class SessionManagementStructGetSessionsAvailabilitySettings
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetSessionsAvailabilitySettings originally named GetSessionsAvailabilitySettings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetSessionsAvailabilitySettings extends SessionManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The sessionIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfguid
     */
    public $sessionIds;
    /**
     * Constructor method for GetSessionsAvailabilitySettings
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param SessionManagementStructArrayOfguid $_sessionIds
     * @return SessionManagementStructGetSessionsAvailabilitySettings
     */
    public function __construct($_auth = NULL,$_sessionIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'sessionIds'=>($_sessionIds instanceof SessionManagementStructArrayOfguid)?$_sessionIds:new SessionManagementStructArrayOfguid($_sessionIds)),false);
    }
    /**
     * Get auth value
     * @return SessionManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param SessionManagementStructAuthenticationInfo $_auth the auth
     * @return SessionManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get sessionIds value
     * @return SessionManagementStructArrayOfguid|null
     */
    public function getSessionIds()
    {
        return $this->sessionIds;
    }
    /**
     * Set sessionIds value
     * @param SessionManagementStructArrayOfguid $_sessionIds the sessionIds
     * @return SessionManagementStructArrayOfguid
     */
    public function setSessionIds($_sessionIds)
    {
        return ($this->sessionIds = $_sessionIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetSessionsAvailabilitySettings
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
