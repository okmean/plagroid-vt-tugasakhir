<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\DomCrawler\Crawler;

class ProductController extends Controller
{
    public function showProduct(Request $request)
{
    $product = new Client();
    $responseProduct = $product->request('GET', 'http://plagro.id/shop/?products-per-page=all');
    $crawlerProduct = new Crawler($responseProduct->getBody()->getContents());
    $productData = collect();
    $crawlerProduct->filter('.woocommerce-LoopProduct-link')->each(function (Crawler $node, $i) use ($productData) {
        $productData->push([
            'id' => md5($node->attr('href')),
            'name' => $node->filter('.woo-entry-image-main')->attr('alt'),
            'link' => $node->attr('href'),
            'image' => $node->filter('.woo-entry-image-main')->attr('src')
        ]);
    });
    $products = $productData->unique('id')->values()->all();
    $currentPage = $request->get('page', 1);
    $perPage = 6;
    $offset = ($currentPage * $perPage) - $perPage;
    $paginatedProducts = new LengthAwarePaginator(array_slice($products, $offset, $perPage), count($products), $perPage, $currentPage, [
        'path' => url('/#product'),
    ]);

    if ($request->ajax()) {
        $products = $paginatedProducts;
        return view('modal-product', compact('products'))->render();
    }
    return view('modal-product', [
        'products' => $paginatedProducts,
    ]);
}

public function getProductDetails(Request $request)
{
    $sourceUrl = $request->input('source');
    
    
    // Make a request to the source website using the $sourceUrl variable
    $product = new Client();
    $sourceUrl = preg_replace('/^https:/', 'https:', $sourceUrl);
    $response = $product->request('GET', $sourceUrl);
    $crawler = new Crawler($response->getBody()->getContents());
    
    // Extract the product details from the response using the $crawler variable
    $productName = $crawler->filter('.entry-title')->text();
    $productDescription = $crawler->filter('.woocommerce-Tabs-panel--description p')->text();    
    $productImage = $crawler->filter('.woocommerce-product-gallery__image img')->attr('src');
    $productPrice = $crawler->filter('.price')->text();
    $videoSrc = '';
    if ($crawler->filter('.ywcfav-video-content video')->count() > 0) {
        $videoSrc = $crawler->filter('source')->attr('src');
    }

    if(empty($videoSrc)) {
        $videoTag = '<div class="no-video">No video available.'.'<img src="' . asset("img/plagro-color-text.svg") . '" class="img-fluid">'.'<div>';
    }
    else{
        $videoTag = '<video controls style="fill;width: -webkit-fill-available;height: -webkit-fill-available;">' .
        '<source src="' . $videoSrc . '" type="video/mp4">' .
        '</video>';
    }

    // Return the product details in JSON format
    return response()->json([
        'name' => $productName,
        'description' => $productDescription,
        'price' => $productPrice,
        'image' => $productImage,
        'video' => $videoTag,
        'url' => $sourceUrl
    ]);
}
}
