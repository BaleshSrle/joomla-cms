<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wrapper
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Wrapper\Site\Helper\WrapperHelper;

$params = WrapperHelper::getParams($params);

$load        = $params->get('load');
$url         = htmlspecialchars($params->get('url'), ENT_COMPAT, 'UTF-8');
$target      = htmlspecialchars($params->get('target'), ENT_COMPAT, 'UTF-8');
$width       = htmlspecialchars($params->get('width'), ENT_COMPAT, 'UTF-8');
$height      = htmlspecialchars($params->get('height'), ENT_COMPAT, 'UTF-8');
$overflow    = htmlspecialchars($params->get('overflow'), ENT_COMPAT, 'UTF-8');
$border      = htmlspecialchars($params->get('border'), ENT_COMPAT, 'UTF-8');
$ititle      = $module->title;
$id          = $module->id;

require ModuleHelper::getLayoutPath('mod_wrapper', $params->get('layout', 'default'));
