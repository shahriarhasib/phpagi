<?php

/**
* phpagi.php : PHP AGI Functions for Asterisk
* Website: http://phpagi.sourceforge.net/
*
* $Id: phpagi.php,v 2.20 2010/09/30 02:21:00 masham Exp $
*
* Copyright (c) 2003 - 2010 Matthew Asham <matthew@ochrelabs.com>, David Eder <david@eder.us> and others
* All Rights Reserved.
*
* This software is released under the terms of the GNU Lesser General Public License v2.1
* A copy of which is available from http://www.gnu.org/copyleft/lesser.html
*
* We would be happy to list your phpagi based application on the phpagi
* website.  Drop me an Email if you'd like us to list your program.
* 
*
* Written for PHP 4.3.4, should work with older PHP 4.x versions.
*
* Please submit bug reports, patches, etc to http://sourceforge.net/projects/phpagi/
* Gracias. :)
*
*
* @package phpAGI
* @version 2.20
*/

if (!class_exists('AGI_AsteriskManager'))
{
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpagi-fixed-by-shahriar.php');
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpagi-asmanager.php');
}
