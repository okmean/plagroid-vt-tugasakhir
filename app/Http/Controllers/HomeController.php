<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;   

class HomeController extends Controller
{
    public function index(Request $request)
    {
            $client = new Client();
            //Basil
            $responseBasil = $client->request('GET', 'http://plagro.id/product/basil/');
            $crawlerBasil = new Crawler($responseBasil->getBody()->getContents());
            $urlBasil = 'https://plagro.id/product/basil'; 
            $pricesbasil = $crawlerBasil->filter('.price')->text();  
            $namesbasil = $crawlerBasil->filter('.entry-title')->text();
            $descbasil = $crawlerBasil->filter('.woocommerce-Tabs-panel--description p')->text();
            $imageBasil = $crawlerBasil->filter('.woocommerce-product-gallery__image img')->attr('src');
            $videoBasil = $crawlerBasil->filter('.ywcfav-video-content video source')->attr('src');
            //Dill
            $responseDill = $client->request('GET', 'http://plagro.id/product/dill/');
            $urlDill = 'https://plagro.id/product/dill'; 
            $crawlerDill = new Crawler($responseDill->getBody()->getContents());   
            $pricesDill = $crawlerDill->filter('.price')->text();  
            $namesDill = $crawlerDill->filter('.entry-title')->text();
            $descDill = $crawlerDill->filter('.woocommerce-Tabs-panel--description p')->text();    
            $imageDill = $crawlerDill->filter('.woocommerce-product-gallery__image img')->attr('src');
            $videoDill = $crawlerDill->filter('.ywcfav-video-content video source')->attr('src');
            //Rosemary
            $responseRosemary = $client->request('GET', 'http://plagro.id/product/rosemary/');
            $urlRosemary = 'https://plagro.id/product/rosemary'; 
            $crawlerRosemary = new Crawler($responseRosemary->getBody()->getContents());   
            $pricesRosemary = $crawlerRosemary->filter('.price')->text();  
            $namesRosemary = $crawlerRosemary->filter('.entry-title')->text();
            $descRosemary = $crawlerRosemary->filter('.woocommerce-Tabs-panel--description p')->text();    
            $imageRosemary = $crawlerRosemary->filter('.woocommerce-product-gallery__image img')->attr('src');
            $videoRosemary = $crawlerRosemary->filter('.ywcfav-video-content video source')->attr('src');
            $products = (new ProductController)->showProduct($request)->getData()['products'];
            // dd($products);
            return view('index', [  
                'title' => 'Virtual Tour - plagro.id',
                'urlbasil' => $urlBasil,
                'pricebasil' => $pricesbasil,
                'namebasil' => $namesbasil,
                'imageBasil' => $imageBasil,
                'videoBasil' => $videoBasil,
                'descbasil' => $descbasil,
                'pricedill' => $pricesDill,
                'urldill' => $urlDill,
                'namedill' => $namesDill,
                'imagedill' => $imageDill,
                'descdill' => $descDill,
                'videodill' => $videoDill,
                'pricerosemary' => $pricesRosemary,
                'namerosemary' => $namesRosemary,
                'imagerosemary' => $imageRosemary,
                'descrosemary' => $descRosemary,
                'urlrosemary' => $urlRosemary,
                'videorosemary' => $videoRosemary,
                'products' => $products


            ]);
               }

    
}
