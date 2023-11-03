<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\seo;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;

class potfulioController extends Controller {
	function WebPotfulio() {
		$actualLink = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$homeLink = "https://" . $_SERVER["HTTP_HOST"];

		$homeSeo = seo::where("seo_name", "home")->get();
		$setTitle = $homeSeo[0]->title;
		$share_title = $homeSeo[0]->share_title;
		$description = $homeSeo[0]->description;
		$tag = $homeSeo[0]->tag;
		$img = $homeLink . "/img/" . $homeSeo[0]->img;
		$addKeyword = $homeSeo[0]->tag;

		//seo for google
		SEOMeta::setTitle($setTitle);
		SEOMeta::setDescription($description);
		SEOMeta::setCanonical($actualLink);
		SEOMeta::addKeyword($addKeyword);
		SEOMeta::addMeta('article:section', "seo", 'property');
		//seo for facebook
		OpenGraph::setDescription($description);
		OpenGraph::setTitle($setTitle);
		OpenGraph::setUrl($homeLink);
		OpenGraph::addProperty('type', 'website');
		OpenGraph::addProperty('locale', 'pt-br');
		OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us', 'bn-BD']);

		OpenGraph::addImage($img);
		OpenGraph::addImage(['url' => $img, 'size' => 300]);
		OpenGraph::addImage($img, ['height' => 300, 'width' => 300]);
		OpenGraph::setSiteName($share_title);

		//seo for twitter
		TwitterCard::setType("Website Potfulio Page"); // type of twitter card tag
		TwitterCard::setTitle($setTitle); // title of twitter card tag
		TwitterCard::setSite($share_title); // site of twitter card tag
		TwitterCard::setDescription($description); // description of twitter card tag
		TwitterCard::setUrl($homeLink); // url of twitter card tag
		TwitterCard::setImage($img); // add image url
		return view("frontend.page.potfulio");
	}
}
