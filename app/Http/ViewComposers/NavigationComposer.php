<?php

namespace App\Http\ViewComposers;

class NavigationComposer
{
	public function compose($view)
	{
    	$lastUrl = \Request::segment(count(\Request::segments()));
    	
	    $view->with('lastUrl',  $lastUrl);
	}
}