<?php


/**
 * Skeleton subclass for performing query and update operations on the 'info' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Jan 18 09:08:51 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class InfoPeer extends BaseInfoPeer {

    public static function getAllUser(){
        $c = new Criteria();
        return self::doSelect($c);
    }

} // InfoPeer
