<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * ShipmentValidateRequest Request model for DHL API
 */
class ShipmentValidateRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentValidateRequestEA';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateRequestEA.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'Y,N',
        ), 
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'Commodity' => array(
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ), 
        'Dutiable' => array(
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
        ), 
        'ExportDeclaration' => array(
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
        ), 
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ), 
        'EProcShip' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Airwaybill' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DocImages' => array(
            'type' => 'DocImages',
            'required' => false,
            'subobject' => true,
        ), 
        'LabelImageFormat' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelImageFormat',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'PDF,ZPL2,EPL2',
        ), 
        'RequestArchiveDoc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ), 
    );
}