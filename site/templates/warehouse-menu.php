<?php
	if (WhsesessionQuery::create()->sessionExists(session_id())) {
		include('./dplus-menu.php');
	} else {
		$url = $pages->get('template=warehouse-menu, dplus_function=wm')->child('template=redir')->url."?action=login&sessionID=".session_id();
		$dplusrequest = $modules->get('DplusRequest');
		$dplusrequest->self_request($url);
		$session->redirect($page->url);
	}
