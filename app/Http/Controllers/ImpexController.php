<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

class ImpexController extends Controller
{

    public $client;

    public $invLinks = array();

    public $proLinks = array();


    public function __construct()
    {
        $this->client = new Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false,),));
    }

    function getState($val)
    {



//        $b = array_search($val, $states);
//        if (!$b) {
//            return null;
//        }
//        return $b;
    }

    function getCity($val, $st)
    {


        $cities = array(1 => array(1 => '臺北市', 2 => '新北市', 3 => '桃園市', 4 => '臺中市', 5 => '臺南市', 6 => '高雄市', ),);
        $b = array_search($val, $cities[$st]);
        if (!$b) {
            return null;
        }
        return $b;
//        $c = [];
//        foreach ($cities as $city) {
//            $c[$city['state_id']][$city['id']] = $city['name'];
//        }
//        var_export($c);
    }

    //
    function customer()
    {

        $cs =  [];

        $txt = '';
        foreach ($cs as $c) {

            $txt .= $c[3] . '<hr>';
            if (Customer::where('id', $c[1])->orWhere('mobile', $c[4])->count() == 0) {
                $cn = new Customer();
                $cn->id = $c[1];
            } else {
                $cn = Customer::where('id', $c[1])->orWhere('mobile', $c[4])->first();
            }
            $cn->name = trim($c[3]);
            $cn->email = null;
            $cn->mobile = trim($c[4]);
            $cn->colleague = 0;
            $cn->state = $this->getState(trim($c[6]));
            if ($cn->state != null) {
                $cn->city = $this->getCity(trim($c[7]), $cn->state);
            }
            $cn->address = trim($c[8]);
            $cn->postal_code = trim($c[9]);
            $cn->save();
        }

        return $txt;
    }

    function col()
    {
        $cs = [];

        $txt = '';
        foreach ($cs as $c) {

            $txt .= $c[3] . '<hr>';
            if (Customer::where('id', $c[1])->orWhere('mobile', $c[4])->count() == 0) {
                $cn = new Customer();
                $cn->id = $c[1];
            } else {
                $cn = Customer::where('id', $c[1])->orWhere('mobile', $c[4])->first();
            }
            $cn->name = trim($c[2]);
            $cn->email = null;
            $cn->mobile = trim($c[4]);
            $cn->colleague = 1;
            $cn->state = null;
            $cn->city = null;
            $cn->address = null;
            $cn->postal_code = null;
            $cn->description = $c[3];
            $cn->save();
        }
        return $txt;
    }

    function getPage($url)
    {

        $jar = \GuzzleHttp\Cookie\CookieJar::fromArray(
            [
                'ny_ny_sntral_session' => 'eyJpdiI6Ik1qT3B1ZVdRWnVWeG4rb0JTMFlKR0E9PSIsInZhbHVlIjoibWtlVjc3VGtHTU54bVFPN3JEZXdzQ1pROTJHQzFnUnB3TVZhY2NEZEZwa05jYXRXdkpLRVZsSzlGWjdYeXIrcCtqMW5lbm1iMWVZNWRPY0YwL0lMZ0hhbkIxUFRhMW5jNHdCNXN1ZVFTV1RmcHpRTUIrSDJNd2lTUjRkK2hlejEiLCJtYWMiOiI5YTAwYzgzNzM3N2IzNTNmZjRiYTUxZDRhOGQ1YTMyZWQ2NzhhYzQ1OWM0ZDg0YmM3MmVkYTFjNDFjMjA3MTQ1In0%3D',
                'nynysntral_session' => 'eyJpdiI6Im5ha2h2ZTJ3QTRrTzBCT0FTOTk1TVE9PSIsInZhbHVlIjoib21uYmw5alFGMVNaUFlrOFFhTjY4eGZVTERqYzhmWWxhRzlFalpJU053NW1STWkveXpPK21HM0NhRi80ZVNMV0RsKzVCeE1PUlcyZTd5MUhOWFpYZVpRNkFWQ0tjcWlLWTdIK1FUTW9lVUhxS2gzZXlCUXZKbTl0UnN0UVpJUG4iLCJtYWMiOiI4ZTQ2MGUzYzk2NGQ5Yjc1NDJlOTQwMTAyNmFhMTM2ZWY2Yjc4NWQwMDVjNjNlZTAyYjY2NGFjOWMwZGVkNGU1IiwidGFnIjoiIn0%3D',
                'XSRF-TOKEN' => 'eyJpdiI6IlZ4enFDazVkL3UycERkeVZxbmlVNlE9PSIsInZhbHVlIjoia0tQbFppOXFlbWc0SUdjekwrVkxhODc2UlNVaEx2RzAwemEyUjl3NS93bUFYaFYwekplaElXem5mSHhwSWxEbUY5aGJuSFZxYU8vSTd5V0YrbkxLbVlWQ28zZ2xnQ1doT0VTTWdjQ21YeitJdkJsMDhyZG1ELzFhWVc3aFEwMmwiLCJtYWMiOiI1OWVmNGMxZmMzYjdhNDQ1ODUyNzFjNzU2ZTY1OTVkM2IxMzRiODkzMGM5MjNlZDBkYzcwYTI4YjlkZDM0NDNjIn0%3D',
            ],
            'ninicenteral.com'
        );
        $res = $this->client->request('GET', $url, [
            'cookies' => $jar,
        ]);


//        echo $res->getStatusCode();
// "200"
//        echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
        if  ($res->getStatusCode() == 200){
            return $res->getBody();
        }else{
            return  false;
        }
    }


    function crwl()
    {
        $links = [];
//
//        for ($i = 1; $i <= 16; $i++) {
//            $html = $this->getPage('https://ninicenteral.com/ninicenteral/product?page=' . $i);
//            $crawler = new Crawler($html);
//
////        $x = $crawler->filter("table.table-hover tr td:nth-child(4) a")->first()
//            foreach ($crawler->filter("table.table-hover tr td:nth-child(4) a") as $k => $el) {
//                $node = new Crawler($el);
//                $n = $k + 1;
//                $id = $crawler->filter("table.table-hover tr:nth-child({$n}) td:nth-child(1)")->first()->innerText();
//                $links[$id] = $node->attr('href');
//            }
//        }


//        $links = array_reverse($links);
        var_export($links);
//        var_dump($x);
    }

    function crwl2()
    {
        $links = [];

//        for ($i = 1; $i <= 37; $i++) {
//            $html = $this->getPage('https://ninicenteral.com/ninicenteral/order/all?page=' . $i);
//            $crawler = new Crawler($html);
//
//            //$id = $crawler->filter("table.table-hover tr:nth-child({$n}) td:nth-child(1)")->first()->innerText();
////        $x = $crawler->filter("table.table-hover tr td:nth-child(4) a")->first()
//            foreach ($crawler->filter("table.table-hover tr td:nth-child(7) a") as $k => $el) {
//                $node = new Crawler($el);
//                if ($node->filter("table.table-hover tr:nth-child({$k}) .badge-danger")->count() == 0) {
//                    $links[] = $node->attr('href');
//                }
//            }
//        }


        $links = array_reverse($links);
        var_export($links);
//        var_dump($x);
    }

//
//$cats = json_decode('[
//  {
//    "id": "1",
//    "text": "پوشاک پاییزه زمستونی"
//  },
//  {
//    "id": "7",
//    "text": "  زمستانی دخترانه"
//  },
//  {
//    "id": "3",
//    "text": "دخترانه  بلوز شلوار "
//  },
//  {
//    "id": "4",
//    "text": " دخترانه هودی شلوار "
//  },
//  {
//    "id": "5",
//    "text": "دخترانه سویشرت شلوار "
//  },
//  {
//    "id": "8",
//    "text": "  زمستانی پسرانه"
//  },
//  {
//    "id": "9",
//    "text": "پسراته بلوز شلوار "
//  },
//  {
//    "id": "10",
//    "text": " پسرانه  هودی شلوار "
//  },
//  {
//    "id": "12",
//    "text": "  پسرانه سویشرت شلوار "
//  },
//  {
//    "id": "13",
//    "text": "پوشاک بهاره تابستانه"
//  },
//  {
//    "id": "14",
//    "text": "  تاسبتانی پسرانه"
//  },
//  {
//    "id": "15",
//    "text": "پسرانه  تیشرت و شلوارک "
//  },
//  {
//    "id": "16",
//    "text": "  تابستانی دخترانه"
//  },
//  {
//    "id": "17",
//    "text": "دخترانه  تیشرت و شلوارک "
//  },
//  {
//    "id": "18",
//    "text": "حراجی تک سایز"
//  }
//]');
//foreach ($cats as $cat){
//$c = new Cat();
//$c->id = $cat->id;
//$c->name = $cat->text;
//$c->slug =  \StarterKit::slug($cat->text);
//$c->save();
//}

    function getPro()
    {
        ini_set('max_execution_time', 0);
        set_time_limit(0);
//        $k = 2;
        foreach ($this->proLinks as $k => $url) {
//            if ($k <= 0){
//                continue;
//            }
            $url = $this->proLinks[$k];
            usleep(300000);
            $html = $this->getPage($url);
            if  ($html != false){
                $crawler = new Crawler($html);


                if ($crawler->filter('#inputState option:selected')->first()->attr('value') != 'تحویل به پست') {
                    continue;
                }
                $p = new Product();
                $p->id = $k;
                $p->name = $crawler->filter('#title')->first()->attr('value');
                $p->active = true;
                $p->excerpt = $p->name;
                $part = explode('/', $url);
                $p->slug = urldecode($part[count($part) - 1]);
                $p->description = str_replace('html', 'div', $crawler->filter('#textarea')->first()->innerText());
                $cats = [];
                $crawler->filter('#select option:selected')->each(function ($node) use (&$cats) {
                    $cats[] = $node->attr('value');
                });
                $p->cat_id = $cats[0];
                $p->user_id = User::first()->id;
                $p->save();
                $p->syncMeta(['type' => $crawler->filter('#type_id option:selected')->first()->attr('value')]);
                $p->categories()->sync($cats);
                $crawler->filter('img.m-2')->each(function ($node) use (&$p) {
                    $pUrl = $node->attr('src');
                    $this->client->request('GET', $pUrl, [
                        'sink' => storage_path('test.jpg')
                    ]);
                    $p->addMedia(storage_path('test.jpg'))->toMediaCollection();
                });
                $p->save();
                print $p->name . ' Done! <hr>';
            }else{
                print  $k.' | '.$url.' skip: <hr>';
            }

        }
    }

    public function getInv()
    {
        ini_set('max_execution_time', 0);
        set_time_limit(0);
        foreach ($this->invLinks as $i => $url) {

            $html = $this->getPage($url); // coleage
//        $html = $this->getPage('https://ninicenteral.com/ninicenteral/order/1451');
//        $html = $this->getPage('https://ninicenteral.com/ninicenteral/order/1473');


            $crawler = new Crawler($html);
            $inv = new Invoice();
            $inv->transport_id = 1;
            $inv->transport_price = $crawler->filter('.pc.mx-3.d-inline')->first()->innerText();
            $inv->total_price = $crawler->filter('.pc.b')->first()->text();
            $inv->status = 'COMPLETED';
            $inv->hash = md5(time() . $inv->total_price . rand(0, 9999));
            // $('.border-1 span').length
            if ($crawler->filter('.border-1 span')->count() == 39) {
                // hamkarr
                $number = $crawler->filter('.border-1 .b.mr-3')->eq(8)->innerText();
                $inv->desc = $crawler->filter('.border-1 .b.mr-3')->eq(4)->innerText().', ';
                $inv->desc .= $crawler->filter('.border-1 .b.mr-3')->eq(5)->innerText().', ';
                $inv->desc .= $crawler->filter('.border-1 .b.mr-3')->eq(6)->innerText();
            } else {
                $number = $crawler->filter('.border-1 span')->eq(7)->innerText();
            }
            $inv->tracking_code = $crawler->filter('#tracking_code')->first()->attr('value');

            if (Customer::where('mobile', trim($number))->count() == 0) {
                $inv->customer_id = null;
            } else {
                $inv->customer_id = Customer::where('mobile', trim($number))->first()->id;
            }
            $inv->save();

            $crawler->filter('.scroll-x tr')->each(function ($node) use (&$inv) {
//            $node = new Crawler($el);
                if ($node->filter('td')->count() > 4) {

                    $id = trim($node->filter('td:first-child')->innerText());
                    $p = Product::where('id', $id)->first();
                    if ($p != null) {
                        $inv->products()->save(
                            $p,
                            [
                                'count' => $node->filter('td:nth-child(4)')->innerText(),
                                'price_total' => $node->filter('td:nth-child(5)')->innerText(),
                            ]
                        );
                    }
//                echo $node->filter('td:nth-child(3)')->innerText() . '<br>';
                }
            });

            echo $i . $url . ' Done! <hr>';
        }

    }

    public function login(){
        if (!auth()->check()){
            return  abort(403);
        }
        return \Auth::guard('customer')->loginUsingId(Customer::inRandomOrder()->first()->id);
    }
    public function loginas($tel){
        if (!auth()->check()){
            return  abort(403);
        }
        return \Auth::guard('customer')->loginUsingId(Customer::whereMobile($tel)->first()->id);
    }
}
