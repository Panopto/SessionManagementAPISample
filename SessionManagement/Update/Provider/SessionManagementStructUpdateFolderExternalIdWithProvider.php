<?php
/**
 * File for class SessionManagementStructUpdateFolderExternalIdWithProvider
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateFolderExternalIdWithProvider originally named UpdateFolderExternalIdWithProvider
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateFolderExternalIdWithProvider extends SessionManagementWsdlClass
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
     * The externalId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $externalId;
    /**
     * The SiteMembershipProviderName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SiteMembershipProviderName;
    /**
     * Constructor method for UpdateFolderExternalIdWithProvider
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param string $_folderId
     * @param string $_externalId
     * @param string $_siteMembershipProviderName
     * @return SessionManagementStructUpdateFolderExternalIdWithProvider
     */
    public function __construct($_auth = NULL,$_folderId = NULL,$_externalId = NULL,$_siteMembershipProviderName = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'folderId'=>$_folderId,'externalId'=>$_externalId,'SiteMembershipProviderName'=>$_siteMembershipProviderName),false);
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
     * Get externalId value
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $_externalId the externalId
     * @return string
     */
    public function setExternalId($_externalId)
    {
        return ($this->externalId = $_externalId);
    }
    /**
     * Get SiteMembershipProviderName value
     * @return string|null
     */
    public function getSiteMembershipProviderName()
    {
        return $this->SiteMembershipProviderName;
    }
    /**
     * Set SiteMembershipProviderName value
     * @param string $_siteMembershipProviderName the SiteMembershipProviderName
     * @return string
     */
    public function setSiteMembershipProviderName($_siteMembershipProviderName)
    {
        return ($this->SiteMembershipProviderName = $_siteMembershipProviderName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateFolderExternalIdWithProvider
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
