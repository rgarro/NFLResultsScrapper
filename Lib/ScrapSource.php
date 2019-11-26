<?php
/**
 * NFL Scrap Sources abstract definition
 * 
 * 
 *      _.-=""=-._ 
 *    .'\\-++++-//'.
 *   (  ||      ||  )
 *    './/      \\.'
 *      `'-=..=-'`
 * 
 * @author Rolando <software@konstantdigital.com>
 */
abstract class ScrapSource {

    protected $is_available = false;
    protected $url = "";
    protected $enclosing_tags = array();

    protected function checkIfValid(){}
    
}