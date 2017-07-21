<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Post;

class SitemapController extends Controller
{
    public function sitemap(){
    $domDocument = new \DOMDocument('1.0', "UTF-8");
	$domElement = $domDocument->createElement('urlset');
	$domAttribute = $domDocument->createAttribute('xmlns');
	$domAttribute->value = 'http://www.sitemaps.org/schemas/sitemap/0.9';
	$domElement->appendChild($domAttribute);
	$domDocument->appendChild($domElement);
    		    
    $pages = [
    	'victory-tower.html',
    	'mat-bang.html',
    	'mat-bang.html',
    	'tin-tuc-su-kien.html',
    	'tien-ich-can-ho.html',
    	'lien-he.html',
    	];

    foreach ($pages as $page){
		$pageUrl = url('/').'/'.$page;
		$urlElement = $domDocument->createElement('url');
		$domElement->appendChild($urlElement);	
		$locElement = $domDocument->createElement('loc',$pageUrl);
		$urlElement->appendChild($locElement);
	    }

    $posts = Post::all();
    foreach ($posts as $post){
		$postUrl = $post->getUrl();
		$urlElement = $domDocument->createElement('url');
		$domElement->appendChild($urlElement);	
		$locElement = $domDocument->createElement('loc',$postUrl);
		$urlElement->appendChild($locElement);
	    }

	return Response::make($domDocument->saveXML(), '200')->header('Content-Type', 'text/xml');
    }
}
