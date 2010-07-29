<?php
/* SVN FILE: $Id$ */
/**
 * Twitter設定モデル
 *
 * PHP versions 4 and 5
 *
 * Baser :  Basic Creating Support Project <http://basercms.net>
 * Copyright 2008 - 2009, Catchup, Inc.
 *								18-1 nagao 1-chome, fukuoka-shi
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2009, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			twitter.models
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
/**
 * Twitter設定モデル
 *
 * @package			twitter.models
 */
class TwitterConfig extends AppModel{
/**
 * モデル名
 * @var		string
 * @access	public
 */
	var $name = 'TwitterConfig';
/**
 * DB設定
 * @var		string
 * @access 	public
 */
	var $useDbConfig = 'plugin';
/**
 * プラグイン名
 * @var		string
 * @access 	public
 */
	var $plugin = 'Twitter';
}
?>