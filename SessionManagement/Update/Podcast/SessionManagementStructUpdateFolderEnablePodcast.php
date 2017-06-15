<?php
/**
 * File for class SessionManagementStructUpdateFolderEnablePodcast
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateFolderEnablePodcast originally named UpdateFolderEnablePodcast
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateFolderEnablePodcast extends SessionManagementWsdlClass
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
     * The folderId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - pattern : [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * @var string
     */
    public $folderId;
    /**
     * The enablePodcast
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $enablePodcast;
    /**
     * Constructor method for UpdateFolderEnablePodcast
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param string $_folderId
     * @param boolean $_enablePodcast
     * @return SessionManagementStructUpdateFolderEnablePodcast
     */
    public function __construct($_auth = NULL,$_folderId = NULL,$_enablePodcast = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'folderId'=>$_folderId,'enablePodcast'=>$_enablePodcast),false);
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
     * Get folderId value
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->folderId;
    }
    /**
     * Set folderId value
     * @param string $_folderId the folderId
     * @return string
     */
    public function setFolderId($_folderId)
    {
        return ($this->folderId = $_folderId);
    }
    /**
     * Get enablePodcast value
     * @return boolean|null
     */
    public function getEnablePodcast()
    {
        return $this->enablePodcast;
    }
    /**
     * Set enablePodcast value
     * @param boolean $_enablePodcast the enablePodcast
     * @return boolean
     */
    public function setEnablePodcast($_enablePodcast)
    {
        return ($this->enablePodcast = $_enablePodcast);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateFolderEnablePodcast
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
