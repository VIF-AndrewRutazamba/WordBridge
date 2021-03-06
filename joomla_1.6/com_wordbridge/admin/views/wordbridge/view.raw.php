<?php
/**
 * @version     $Id$
 * @package  Wordbridge
 * @copyright   Copyright (C) 2011 Cognidox Ltd
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE v3
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );
require_once( JPATH_SITE.DS.'components'.DS.'com_wordbridge'.DS.'helpers'.DS.'helper.php' );

class WordbridgeViewWordbridge extends JView
{
    /**
     * Wordbridge entry view display method
     * @return void
     **/
    function display( $tpl = null )
    {
        $blogName = JRequest::getVar( 'blog_name' );
        $model =& $this->getModel();
        $cleared = $model->clearBlogCache( $blogName );
        $this->assignRef( 'cleared', $cleared );

        parent::display( $tpl );
    }
}
