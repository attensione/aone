<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

require_once 'include/Smarty.class.php';
$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$request = array_merge(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

if($_SERVER['REQUEST_URI']!=='/') {
    if($request[0]=='o-mnie') {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /");
    }
    if($request[0]=='system') {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /oferta/system");
    }
    if($request[0]=='strona') {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /oferta/strona");
    }
    if($request[0]=='sklep') {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /oferta/sklep");
    }
}

if(array_key_exists(1, $request)) $page = 'pages/'.$request[0].'/'.$request[1];
elseif((array_key_exists(0, $request))&&($request[0]!='')) $page = 'pages/'.$request[0];
else $page='home';

if($page!='home') {
    if(!$smarty->templateExists($page.'.tpl')) $page = '404';
}

$smarty->assign("page", $page);


$breadcumbs=explode("/", $page);
$breadcumbs[0] = 'strona główna';
$smarty->assign("breadcumbs", $breadcumbs);










if($page=='404') $pagename = '404';
elseif($page=='home') $pagename = '';
else $pagename = end($breadcumbs);
$smarty->assign("pagename", $pagename);

$smarty->fetch($page.'.tpl');
$pagetitle = $smarty->getTemplateVars('pagetitle');
if(empty($pagetitle)) $pagetitle = $pagename;
$smarty->assign("pagetitle", $pagetitle);







$smarty->display('index.tpl');
