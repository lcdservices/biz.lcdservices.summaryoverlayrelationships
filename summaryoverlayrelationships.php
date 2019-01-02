<?php

require_once 'summaryoverlayrelationships.civix.php';
use CRM_Summaryoverlayrelationships_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function summaryoverlayrelationships_civicrm_config(&$config) {
  _summaryoverlayrelationships_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function summaryoverlayrelationships_civicrm_xmlMenu(&$files) {
  _summaryoverlayrelationships_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function summaryoverlayrelationships_civicrm_install() {
  _summaryoverlayrelationships_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function summaryoverlayrelationships_civicrm_postInstall() {
  _summaryoverlayrelationships_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function summaryoverlayrelationships_civicrm_uninstall() {
  _summaryoverlayrelationships_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function summaryoverlayrelationships_civicrm_enable() {
  _summaryoverlayrelationships_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function summaryoverlayrelationships_civicrm_disable() {
  _summaryoverlayrelationships_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function summaryoverlayrelationships_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _summaryoverlayrelationships_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function summaryoverlayrelationships_civicrm_managed(&$entities) {
  _summaryoverlayrelationships_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function summaryoverlayrelationships_civicrm_caseTypes(&$caseTypes) {
  _summaryoverlayrelationships_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function summaryoverlayrelationships_civicrm_angularModules(&$angularModules) {
  _summaryoverlayrelationships_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function summaryoverlayrelationships_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _summaryoverlayrelationships_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function summaryoverlayrelationships_civicrm_entityTypes(&$entityTypes) {
  _summaryoverlayrelationships_civix_civicrm_entityTypes($entityTypes);
}

function summaryoverlayrelationships_civicrm_buildForm($formName, &$form) {
    
 CRM_Core_Resources::singleton()->addScriptFile(E::LONG_NAME, 'js/Summaryoverlay.js');

}

