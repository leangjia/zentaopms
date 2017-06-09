<?php
global $lang;

$config->doc = new stdclass();
$config->doc->createLib = new stdclass();
$config->doc->editLib   = new stdclass();
$config->doc->create    = new stdclass();
$config->doc->edit      = new stdclass();

$config->doc->createLib->requiredFields = 'name';
$config->doc->editLib->requiredFields   = 'name';
$config->doc->create->requiredFields = 'title';
$config->doc->edit->requiredFields   = 'title';

$config->doc->editor = new stdclass();
$config->doc->editor->create = array('id' => 'content', 'tools' => 'fullTools');
$config->doc->editor->edit   = array('id' => 'content', 'tools' => 'fullTools');
$config->doc->editor->view   = array('id' => 'comment,lastComment', 'tools' => 'fullTools');

$config->doc->markdown = new stdclass();
$config->doc->markdown->create = array('id' => 'contentMarkdown', 'tools' => 'withchange');

$config->doc->search['module']                   = 'doc';
$config->doc->search['fields']['title']          = $lang->doc->title;
$config->doc->search['fields']['id']             = $lang->doc->id;
$config->doc->search['fields']['product']        = $lang->doc->product;
$config->doc->search['fields']['project']        = $lang->doc->project;
$config->doc->search['fields']['lib']            = $lang->doc->lib;
$config->doc->search['fields']['module']         = $lang->doc->module;
$config->doc->search['fields']['keywords']       = $lang->doc->keywords;
$config->doc->search['fields']['addedBy']        = $lang->doc->addedBy;
$config->doc->search['fields']['addedDate']      = $lang->doc->addedDate;
$config->doc->search['fields']['editedBy']       = $lang->doc->editedBy;
$config->doc->search['fields']['editedDate']     = $lang->doc->editedDate;
$config->doc->search['fields']['version']        = $lang->doc->version;

$config->doc->search['params']['title']         = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->doc->search['params']['keywords']      = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->doc->search['params']['product']       = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->doc->search['params']['module']        = array('operator' => 'belong',  'control' => 'select', 'values' => '');
$config->doc->search['params']['project']       = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->doc->search['params']['lib']           = array('operator' => '=',       'control' => 'select', 'values' => '' );
$config->doc->search['params']['addedBy']       = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->doc->search['params']['addedDate']     = array('operator' => '=',       'control' => 'input',  'values' => '', 'class' => 'date');
$config->doc->search['params']['editedBy']      = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->doc->search['params']['editedDate']    = array('operator' => '=',       'control' => 'input',  'values' => '', 'class' => 'date');
$config->doc->search['params']['version']       = array('operator' => '=',       'control' => 'input',  'values' => '');

$config->filterParam->get['doc']['showfiles']['hold'] = 'recTotal,recPerPage,pageID,title';
$config->filterParam->get['doc']['showfiles']['params']['recTotal']['reg']   = '/^[0-9_]+$/';
$config->filterParam->get['doc']['showfiles']['params']['recPerPage']['reg'] = '/^[0-9]+$/';
$config->filterParam->get['doc']['showfiles']['params']['pageID']['reg']     = '/^[0-9]+$/';
$config->filterParam->get['doc']['showfiles']['params']['title']['reg']      = '/./';

$config->filterParam->cookie['doc']['common']['hold'] = 'product,from';
$config->filterParam->cookie['doc']['browse']['hold'] = 'browseType';
$config->filterParam->cookie['doc']['common']['params']['product']['int']    = '';
$config->filterParam->cookie['doc']['common']['params']['from']['code']      = '';
$config->filterParam->cookie['doc']['browse']['params']['browseType']['reg'] = '/^by[a-z]+$/';
