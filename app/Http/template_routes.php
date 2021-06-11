<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Templates
Route::group(['prefix' => 'temp'], function () {
    // Boxify
    Route::get('boxify', ['as' => 'temp.boxify.index', 'uses' => function () {
        return view('templates/boxify/index');
    }]);
    // Fashion
    Route::group(['prefix' => 'fashion'], function () {
        Route::get('/', ['as' => 'temp.fashion.index', 'uses' => function () {
            return view('templates/fashion/index');
        }]);
        Route::get('about', ['as' => 'temp.fashion.about', 'uses' => function () {
            return view('templates/fashion/about');
        }]);
        Route::get('archive', ['as' => 'temp.fashion.archive', 'uses' => function () {
            return view('templates/fashion/archive');
        }]);
        Route::get('contact', ['as' => 'temp.fashion.contact', 'uses' => function () {
            return view('templates/fashion/contact');
        }]);
        Route::get('post', ['as' => 'temp.fashion.post', 'uses' => function () {
            return view('templates/fashion/post');
        }]);
    });
    // Fashion-hub
    Route::group(['prefix' => 'fashion-hub'], function () {
        Route::get('/', ['as' => 'temp.fashion-hub.index', 'uses' => function () {
            return view('templates/fashion-hub/index');
        }]);
        Route::get('about', ['as' => 'temp.fashion-hub.about', 'uses' => function () {
            return view('templates/fashion-hub/about');
        }]);
        Route::get('boy', ['as' => 'temp.fashion-hub.boy', 'uses' => function () {
            return view('templates/fashion-hub/boy');
        }]);
        Route::get('boys', ['as' => 'temp.fashion-hub.boys', 'uses' => function () {
            return view('templates/fashion-hub/boys');
        }]);
        Route::get('girl', ['as' => 'temp.fashion-hub.girl', 'uses' => function () {
            return view('templates/fashion-hub/girl');
        }]);
        Route::get('girls', ['as' => 'temp.fashion-hub.girls', 'uses' => function () {
            return view('templates/fashion-hub/girls');
        }]);
        Route::get('men', ['as' => 'temp.fashion-hub.men', 'uses' => function () {
            return view('templates/fashion-hub/men');
        }]);
        Route::get('mens', ['as' => 'temp.fashion-hub.mens', 'uses' => function () {
            return view('templates/fashion-hub/mens');
        }]);
        Route::get('women', ['as' => 'temp.fashion-hub.women', 'uses' => function () {
            return view('templates/fashion-hub/women');
        }]);
        Route::get('womens', ['as' => 'temp.fashion-hub.womens', 'uses' => function () {
            return view('templates/fashion-hub/womens');
        }]);
        Route::get('checkout', ['as' => 'temp.fashion-hub.checkout', 'uses' => function () {
            return view('templates/fashion-hub/checkout');
        }]);
        Route::get('contact', ['as' => 'temp.fashion-hub.contact', 'uses' => function () {
            return view('templates/fashion-hub/contact');
        }]);
        Route::get('single', ['as' => 'temp.fashion-hub.single', 'uses' => function () {
            return view('templates/fashion-hub/single');
        }]);
        Route::get('shop', ['as' => 'temp.fashion-hub.shop', 'uses' => function () {
            return view('templates/fashion-hub/shop');
        }]);
        Route::get('payment', ['as' => 'temp.fashion-hub.payment', 'uses' => function () {
            return view('templates/fashion-hub/payment');
        }]);
        Route::get('about', ['as' => 'temp.fashion-hub.about', 'uses' => function () {
            return view('templates/fashion-hub/about');
        }]);
        Route::get('faq', ['as' => 'temp.fashion-hub.faq', 'uses' => function () {
            return view('templates/fashion-hub/faq');
        }]);
        Route::get('blog', ['as' => 'temp.fashion-hub.blog', 'uses' => function () {
            return view('templates/fashion-hub/blog');
        }]);
    });
    // Downy Shoes
    Route::group(['prefix' => 'downyshoes'], function () {
        Route::get('/', ['as' => 'temp.downyshoes.index', 'uses' => function () {
            return view('templates/downyshoes/index');
        }]);
        Route::get('checkout', ['as' => 'temp.downyshoes.checkout', 'uses' => function () {
            return view('templates/downyshoes/checkout');
        }]);
        Route::get('about', ['as' => 'temp.downyshoes.about', 'uses' => function () {
            return view('templates/downyshoes/about');
        }]);
        Route::get('shop', ['as' => 'temp.downyshoes.shop', 'uses' => function () {
            return view('templates/downyshoes/shop');
        }]);
        Route::get('payment', ['as' => 'temp.downyshoes.payment', 'uses' => function () {
            return view('templates/downyshoes/payment');
        }]);
        Route::get('contact', ['as' => 'temp.downyshoes.contact', 'uses' => function () {
            return view('templates/downyshoes/contact');
        }]);
        Route::get('single', ['as' => 'temp.downyshoes.single', 'uses' => function () {
            return view('templates/downyshoes/single');
        }]);
        Route::get('404', ['as' => 'temp.downyshoes.404', 'uses' => function () {
            return view('templates/downyshoes/404');
        }]);
    });
    //sliteshoppy
    Route::group(['prefix' => 'eliteshoppy'], function () {
        Route::get('/', ['as' => 'temp.eliteshoppy.index', 'uses' => function () {
            return view('templates/eliteshoppy/index');
        }]);
        Route::get('/about', ['as' => 'temp.eliteshoppy.about', 'uses' => function () {
            return view('templates/eliteshoppy/about');
        }]);
        Route::get('/contact', ['as' => 'temp.eliteshoppy.contact', 'uses' => function () {
            return view('templates/eliteshoppy/contact');
        }]);
        Route::get('/mens', ['as' => 'temp.eliteshoppy.mens', 'uses' => function () {
            return view('templates/eliteshoppy/mens');
        }]);
        Route::get('/womens', ['as' => 'temp.eliteshoppy.womens', 'uses' => function () {
            return view('templates/eliteshoppy/womens');
        }]);
        Route::get('/single', ['as' => 'temp.eliteshoppy.single', 'uses' => function () {
            return view('templates/eliteshoppy/single');
        }]);
    });
    //Classic Style
    Route::group(['prefix' => 'classicstyle'], function () {
        Route::get('/', ['as' => 'temp.classicstyle.index', 'uses' => function () {
            return view('templates/classicstyle/index');
        }]);
        Route::get('/checkout', ['as' => 'temp.classicstyle.checkout', 'uses' => function () {
            return view('templates/classicstyle/checkout');
        }]);
        Route::get('/contact', ['as' => 'temp.classicstyle.contact', 'uses' => function () {
            return view('templates/classicstyle/contact');
        }]);
        Route::get('/products', ['as' => 'temp.classicstyle.products', 'uses' => function () {
            return view('templates/classicstyle/products');
        }]);
        Route::get('/single', ['as' => 'temp.classicstyle.single', 'uses' => function () {
            return view('templates/classicstyle/single');
        }]);
        Route::get('/login', ['as' => 'temp.classicstyle.login', 'uses' => function () {
            return view('templates/classicstyle/login');
        }]);
        Route::get('/products1', ['as' => 'temp.classicstyle.products1', 'uses' => function () {
            return view('templates/classicstyle/products1');
        }]);
        Route::get('/register', ['as' => 'temp.classicstyle.register', 'uses' => function () {
            return view('templates/classicstyle/register');
        }]);
    });
    //Beauty Spa
    Route::group(['prefix' => 'beautyspa'], function () {
        Route::get('/', ['as' => 'temp.beautyspa.index', 'uses' => function () {
            return view('templates/beautyspa/index');
        }]);
    });
    // pedicure Beauty Spa
    Route::group(['prefix' => 'pedicure'], function () {

        Route::get('/', ['as' => 'temp.pedicure.index', 'uses' => function () {
            return view('templates/pedicure/index');
        }]);
        Route::get('/about', ['as' => 'temp.pedicure.about', 'uses' => function () {
            return view('templates/pedicure/about');
        }]);
        Route::get('/services', ['as' => 'temp.pedicure.services', 'uses' => function () {
            return view('templates/pedicure/services');
        }]);
        Route::get('/contact', ['as' => 'temp.pedicure.contact', 'uses' => function () {
            return view('templates/pedicure/contact');
        }]);
        Route::get('/gallery', ['as' => 'temp.pedicure.gallery', 'uses' => function () {
            return view('templates/pedicure/gallery');
        }]);
    });
    // Eleganter
    Route::group(['prefix' => 'eleganter'], function () {
        Route::get('/', ['as' => 'temp.eleganter.index', 'uses' => function () {
            return view('templates/eleganter/index');
        }]);
        Route::get('products', ['as' => 'temp.eleganter.products', 'uses' => function () {
            return view('templates/eleganter/products');
        }]);
        Route::get('about', ['as' => 'temp.eleganter.about', 'uses' => function () {
            return view('templates/eleganter/about');
        }]);
        Route::get('contact', ['as' => 'temp.eleganter.contact', 'uses' => function () {
            return view('templates/eleganter/contact');
        }]);
        Route::get('premium', ['as' => 'temp.eleganter.premium', 'uses' => function () {
            return view('templates/eleganter/premium');
        }]);
        Route::get('gallery', ['as' => 'temp.eleganter.gallery', 'uses' => function () {
            return view('templates/eleganter/gallery');
        }]);
    });
    //Men Spa
    Route::group(['prefix' => 'menspa'], function () {
        Route::get('/', ['as' => 'temp.menspa.index', 'uses' => function () {
            return view('templates/menspa/index');
        }]);
        Route::get('/about', ['as' => 'temp.menspa.about', 'uses' => function () {
            return view('templates/menspa/about');
        }]);
        Route::get('/contact', ['as' => 'temp.menspa.contact', 'uses' => function () {
            return view('templates/menspa/contact');
        }]);
        Route::get('/services', ['as' => 'temp.menspa.services', 'uses' => function () {
            return view('templates/menspa/services');
        }]);
        Route::get('/gallery', ['as' => 'temp.menspa.gallery', 'uses' => function () {
            return view('templates/menspa/gallery');
        }]);
        Route::get('/single', ['as' => 'temp.menspa.single', 'uses' => function () {
            return view('templates/menspa/single');
        }]);
    });
    //Hair Salon
    Route::group(['prefix' => 'hairsalon'], function () {
        Route::get('/', ['as' => 'temp.hairsalon.index', 'uses' => function () {
            return view('templates/hairsalon/index');
        }]);
        Route::get('/about', ['as' => 'temp.hairsalon.about', 'uses' => function () {
            return view('templates/hairsalon/about');
        }]);
        Route::get('/contact', ['as' => 'temp.hairsalon.contact', 'uses' => function () {
            return view('templates/hairsalon/contact');
        }]);
        Route::get('/single', ['as' => 'temp.hairsalon.single', 'uses' => function () {
            return view('templates/hairsalon/single');
        }]);
        Route::get('/gallery', ['as' => 'temp.hairsalon.gallery', 'uses' => function () {
            return view('templates/hairsalon/gallery');
        }]);
    });
    // Butterfly - not yet public
    Route::get('butterfly', ['as' => 'temp.butterfly.index', 'uses' => function () {
        return view('templates/butterfly/index');
    }]);
    // Big store
    Route::group(['prefix' => 'bigstore'], function () {
        Route::get('/', ['as' => 'temp.bigstore.index', 'uses' => function () {
            return view('templates/bigstore/index');
        }]);
        Route::get('kitchen', ['as' => 'temp.bigstore.kitchen', 'uses' => function () {
            return view('templates/bigstore/kitchen');
        }]);
        Route::get('contact', ['as' => 'temp.bigstore.contact', 'uses' => function () {
            return view('templates/bigstore/contact');
        }]);
        Route::get('login', ['as' => 'temp.bigstore.login', 'uses' => function () {
            return view('templates/bigstore/login');
        }]);
        Route::get('register', ['as' => 'temp.bigstore.register', 'uses' => function () {
            return view('templates/bigstore/register');
        }]);
    });
    // Gorocy store
    Route::group(['prefix' => 'gorocystore'], function () {
        Route::get('/', ['as' => 'temp.gorocystore.index', 'uses' => function () {
            return view('templates/gorocystore/index');
        }]);
        Route::get('products', ['as' => 'temp.gorocystore.products', 'uses' => function () {
            return view('templates/gorocystore/products');
        }]);
        Route::get('vegetables', ['as' => 'temp.gorocystore.vegetables', 'uses' => function () {
            return view('templates/gorocystore/vegetables');
        }]);
        Route::get('single', ['as' => 'temp.gorocystore.single', 'uses' => function () {
            return view('templates/gorocystore/single');
        }]);
        Route::get('household', ['as' => 'temp.gorocystore.household', 'uses' => function () {
            return view('templates/gorocystore/household');
        }]);
        Route::get('kitchen', ['as' => 'temp.gorocystore.kitchen', 'uses' => function () {
            return view('templates/gorocystore/kitchen');
        }]);
        Route::get('drinks', ['as' => 'temp.gorocystore.drinks', 'uses' => function () {
            return view('templates/gorocystore/drinks');
        }]);
        Route::get('pet', ['as' => 'temp.gorocystore.pet', 'uses' => function () {
            return view('templates/gorocystore/pet');
        }]);
        Route::get('bread', ['as' => 'temp.gorocystore.bread', 'uses' => function () {
            return view('templates/gorocystore/bread');
        }]);
        Route::get('frozen', ['as' => 'temp.gorocystore.frozen', 'uses' => function () {
            return view('templates/gorocystore/frozen');
        }]);
        Route::get('events', ['as' => 'temp.gorocystore.events', 'uses' => function () {
            return view('templates/gorocystore/events');
        }]);
        Route::get('login', ['as' => 'temp.gorocystore.login', 'uses' => function () {
            return view('templates/gorocystore/login');
        }]);
        Route::get('mail', ['as' => 'temp.gorocystore.mail', 'uses' => function () {
            return view('templates/gorocystore/mail');
        }]);
        Route::get('about', ['as' => 'temp.gorocystore.about', 'uses' => function () {
            return view('templates/gorocystore/about');
        }]);
        Route::get('services', ['as' => 'temp.gorocystore.services', 'uses' => function () {
            return view('templates/gorocystore/services');
        }]);
        Route::get('faqs', ['as' => 'temp.gorocystore.faqs', 'uses' => function () {
            return view('templates/gorocystore/faqs');
        }]);
        Route::get('privacy', ['as' => 'temp.gorocystore.privacy', 'uses' => function () {
            return view('templates/gorocystore/privacy');
        }]);
        Route::get('checkout', ['as' => 'temp.gorocystore.checkout', 'uses' => function () {
            return view('templates/gorocystore/checkout');
        }]);
    });
    // Baking
    Route::group(['prefix' => 'baking'], function () {
        Route::get('/', ['as' => 'temp.baking.index', 'uses' => function () {
            return view('templates/baking/index');
        }]);
    });
    // Cake Bakery
    Route::group(['prefix' => 'cake-bakery'], function () {
        Route::get('/', ['as' => 'temp.cake-bakery.index', 'uses' => function () {
            return view('templates/cake-bakery/index');
        }]);
        Route::get('/about', ['as' => 'temp.cake-bakery.about', 'uses' => function () {
            return view('templates/cake-bakery/about');
        }]);
        Route::get('/gallery', ['as' => 'temp.cake-bakery.gallery', 'uses' => function () {
            return view('templates/cake-bakery/gallery');
        }]);
        Route::get('/contact', ['as' => 'temp.cake-bakery.contact', 'uses' => function () {
            return view('templates/cake-bakery/contact');
        }]);
    });
    //interior home
    Route::group(['prefix' => 'interior-home'], function () {
        Route::get('/', ['as' => 'temp.interior-home.index', 'uses' => function () {
            return view('templates/interior-home/index');
        }]);
    });
    //lighting
    Route::group(['prefix' => 'lighting'], function () {
        Route::get('/', ['as' => 'temp.lighting.index', 'uses' => function () {
            return view('templates/lighting/index');
        }]);
        Route::get('/contact', ['as' => 'temp.lighting.contact', 'uses' => function () {
            return view('templates/lighting/contact');
        }]);
        Route::get('/login', ['as' => 'temp.lighting.login', 'uses' => function () {
            return view('templates/lighting/login');
        }]);
        Route::get('/account', ['as' => 'temp.lighting.account', 'uses' => function () {
            return view('templates/lighting/account');
        }]);
        Route::get('/checkout', ['as' => 'temp.lighting.checkout', 'uses' => function () {
            return view('templates/lighting/checkout');
        }]);
        Route::get('/product', ['as' => 'temp.lighting.product', 'uses' => function () {
            return view('templates/lighting/product');
        }]);
        Route::get('/single', ['as' => 'temp.lighting.single', 'uses' => function () {
            return view('templates/lighting/single');
        }]);
    });
    //Tasty Burger
    Route::group(['prefix' => 'tasty-burger'], function () {
        Route::get('/', ['as' => 'temp.tasty-burger.index', 'uses' => function () {
            return view('templates/tasty-burger/index');
        }]);
        Route::get('/login', ['as' => 'temp.tasty-burger.login', 'uses' => function () {
            return view('templates/tasty-burger/login');
        }]);
        Route::get('/about', ['as' => 'temp.tasty-burger.about', 'uses' => function () {
            return view('templates/tasty-burger/about');
        }]);
        Route::get('/contact', ['as' => 'temp.tasty-burger.contact', 'uses' => function () {
            return view('templates/tasty-burger/contact');
        }]);
        Route::get('/menu', ['as' => 'temp.tasty-burger.menu', 'uses' => function () {
            return view('templates/tasty-burger/menu');
        }]);
        Route::get('/register', ['as' => 'temp.tasty-burger.register', 'uses' => function () {
            return view('templates/tasty-burger/register');
        }]);
        Route::get('/single', ['as' => 'temp.tasty-burger.single', 'uses' => function () {
            return view('templates/tasty-burger/single');
        }]);
    });
    //inwardly
    Route::group(['prefix' => 'inwardly'], function () {
        Route::get('/', ['as' => 'temp.inwardly.index', 'uses' => function () {
            return view('templates/inwardly/index', ['check' => true]);
        }]);
        Route::get('/contact', ['as' => 'temp.inwardly.contact', 'uses' => function () {
            return view('templates/inwardly/contact', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.inwardly.gallery', 'uses' => function () {
            return view('templates/inwardly/gallery', ['check' => false]);
        }]);
        Route::get('/services', ['as' => 'temp.inwardly.services', 'uses' => function () {
            return view('templates/inwardly/services', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.inwardly.single', 'uses' => function () {
            return view('templates/inwardly/single', ['check' => false]);
        }]);
        Route::get('/blog', ['as' => 'temp.inwardly.blog', 'uses' => function () {
            return view('templates/inwardly/blog', ['check' => false]);
        }]);
        Route::get('/about', ['as' => 'temp.inwardly.about', 'uses' => function () {
            return view('templates/inwardly/about', ['check' => false]);
        }]);
        Route::get('/404', ['as' => 'temp.inwardly.404', 'uses' => function () {
            return view('templates/inwardly/404', ['check' => false]);
        }]);
    });
    //Amenity
    Route::group(['prefix' => 'amenity'], function () {
        Route::get('/', ['as' => 'temp.amenity.index', 'uses' => function () {
            return view('templates/amenity/index', ['check' => true, 'text' => null]);
        }]);
        Route::get('/about', ['as' => 'temp.amenity.about', 'uses' => function () {
            return view('templates/amenity/about', ['check' => false, 'text' => 'Về Chúng Tôi']);
        }]);
        Route::get('/contact', ['as' => 'temp.amenity.contact', 'uses' => function () {
            return view('templates/amenity/contact', ['check' => false, 'text' => 'Liên Hệ']);
        }]);
        Route::get('/gallery', ['as' => 'temp.amenity.gallery', 'uses' => function () {
            return view('templates/amenity/gallery', ['check' => false, 'text' => 'Bộ Sưu Tập']);
        }]);
        Route::get('/blog', ['as' => 'temp.amenity.blog', 'uses' => function () {
            return view('templates/amenity/blog', ['check' => false, 'text' => 'Blog']);
        }]);
        Route::get('/services', ['as' => 'temp.amenity.services', 'uses' => function () {
            return view('templates/amenity/services', ['check' => false, 'text' => 'Dịch Vụ']);
        }]);
    });
    //villas
    Route::group(['prefix' => 'villas'], function () {
        Route::get('/', ['as' => 'temp.villas.index', 'uses' => function () {
            return view('templates/villas/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.villas.about', 'uses' => function () {
            return view('templates/villas/about', ['check' => false]);
        }]);
        Route::get('/book', ['as' => 'temp.villas.book', 'uses' => function () {
            return view('templates/villas/book', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.villas.contact', 'uses' => function () {
            return view('templates/villas/contact', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.villas.gallery', 'uses' => function () {
            return view('templates/villas/gallery', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.villas.single', 'uses' => function () {
            return view('templates/villas/single', ['check' => false]);
        }]);
    });
    //Food Chef
    Route::group(['prefix' => 'food-chef'], function () {
        Route::get('/', ['as' => 'temp.food-chef.index', 'uses' => function () {
            return view('templates/food-chef/index');
        }]);
    });
    //Luxus
    Route::group(['prefix' => 'luxus'], function () {
        Route::get('/', ['as' => 'temp.luxus.index', 'uses' => function () {
            return view('templates/luxus/index');
        }]);
        Route::get('/about', ['as' => 'temp.luxus.about', 'uses' => function () {
            return view('templates/luxus/about');
        }]);
        Route::get('/blog', ['as' => 'temp.luxus.blog', 'uses' => function () {
            return view('templates/luxus/blog');
        }]);
        Route::get('/single', ['as' => 'temp.luxus.single', 'uses' => function () {
            return view('templates/luxus/single');
        }]);
        Route::get('/contact', ['as' => 'temp.luxus.contact', 'uses' => function () {
            return view('templates/luxus/contact');
        }]);
        Route::get('/gallery', ['as' => 'temp.luxus.gallery', 'uses' => function () {
            return view('templates/luxus/gallery');
        }]);
    });
    //Mastery
    Route::group(['prefix' => 'mastery'], function () {
        Route::get('/', ['as' => 'temp.mastery.index', 'uses' => function () {
            return view('templates/mastery/index');
        }]);
        Route::get('/about', ['as' => 'temp.mastery.about', 'uses' => function () {
            return view('templates/mastery/about');
        }]);
        Route::get('/services', ['as' => 'temp.mastery.services', 'uses' => function () {
            return view('templates/mastery/services');
        }]);
        Route::get('/contact', ['as' => 'temp.mastery.contact', 'uses' => function () {
            return view('templates/mastery/contact');
        }]);
    });
    //Skill
    Route::group(['prefix' => 'skill'], function () {
        Route::get('/', ['as' => 'temp.skill.index', 'uses' => function () {
            return view('templates/skill/index');
        }]);
        Route::get('/about', ['as' => 'temp.skill.about', 'uses' => function () {
            return view('templates/skill/about');
        }]);
        Route::get('/services', ['as' => 'temp.skill.services', 'uses' => function () {
            return view('templates/skill/services');
        }]);
        Route::get('/contact', ['as' => 'temp.skill.contact', 'uses' => function () {
            return view('templates/skill/contact');
        }]);
    });
    //Learning
    Route::group(['prefix' => 'learning'], function () {
        Route::get('/', ['as' => 'temp.learning.index', 'uses' => function () {
            return view('templates/learning/index', ['check' => true]);
        }]);
        Route::get('/gallery', ['as' => 'temp.learning.gallery', 'uses' => function () {
            return view('templates/learning/gallery', ['check' => false]);
        }]);
        Route::get('/about', ['as' => 'temp.learning.about', 'uses' => function () {
            return view('templates/learning/about', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.learning.single', 'uses' => function () {
            return view('templates/learning/single', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.learning.contact', 'uses' => function () {
            return view('templates/learning/contact', ['check' => false]);
        }]);
    });
    //Edulearn
    Route::group(['prefix' => 'edulearn'], function () {
        Route::get('/', ['as' => 'temp.edulearn.index', 'uses' => function () {
            return view('templates/edulearn/index');
        }]);
        Route::get('/login', ['as' => 'temp.edulearn.login', 'uses' => function () {
            return view('templates/edulearn/login');
        }]);
        Route::get('/register', ['as' => 'temp.edulearn.register', 'uses' => function () {
            return view('templates/edulearn/register');
        }]);
        Route::get('/form', ['as' => 'temp.edulearn.form', 'uses' => function () {
            return view('templates/edulearn/form');
        }]);
        Route::get('/404', ['as' => 'temp.edulearn.404', 'uses' => function () {
            return view('templates/edulearn/404');
        }]);
        Route::get('/about', ['as' => 'temp.edulearn.about', 'uses' => function () {
            return view('templates/edulearn/about');
        }]);
        Route::get('/blog', ['as' => 'temp.edulearn.blog', 'uses' => function () {
            return view('templates/edulearn/blog');
        }]);
        Route::get('/business', ['as' => 'temp.edulearn.business', 'uses' => function () {
            return view('templates/edulearn/business');
        }]);
        Route::get('/coming-soon', ['as' => 'temp.edulearn.coming_soon', 'uses' => function () {
            return view('templates/edulearn/coming_soon');
        }]);
        Route::get('/communication', ['as' => 'temp.edulearn.communication', 'uses' => function () {
            return view('templates/edulearn/communication');
        }]);
        Route::get('/contact', ['as' => 'temp.edulearn.contact', 'uses' => function () {
            return view('templates/edulearn/contact');
        }]);
        Route::get('/course-details', ['as' => 'temp.edulearn.course_details', 'uses' => function () {
            return view('templates/edulearn/course_details');
        }]);
        Route::get('/faq', ['as' => 'temp.edulearn.faq', 'uses' => function () {
            return view('templates/edulearn/faq');
        }]);
        Route::get('/gallery', ['as' => 'temp.edulearn.gallery', 'uses' => function () {
            return view('templates/edulearn/gallery');
        }]);
        Route::get('/language', ['as' => 'temp.edulearn.language', 'uses' => function () {
            return view('templates/edulearn/language');
        }]);
        Route::get('/photography', ['as' => 'temp.edulearn.photography', 'uses' => function () {
            return view('templates/edulearn/photography');
        }]);
        Route::get('/single', ['as' => 'temp.edulearn.single', 'uses' => function () {
            return view('templates/edulearn/single');
        }]);
        Route::get('/social-media', ['as' => 'temp.edulearn.social_media', 'uses' => function () {
            return view('templates/edulearn/social_media');
        }]);
        Route::get('/software', ['as' => 'temp.edulearn.software', 'uses' => function () {
            return view('templates/edulearn/software');
        }]);
    });
    //Mug hotel
    Route::group(['prefix' => 'mug-hotel'], function () {
        Route::get('/', ['as' => 'temp.mug-hotel.index', 'uses' => function () {
            return view('templates/mug-hotel/index');
        }]);
        Route::get('/gallery', ['as' => 'temp.mug-hotel.gallery', 'uses' => function () {
            return view('templates/mug-hotel/gallery');
        }]);
        Route::get('/contact', ['as' => 'temp.mug-hotel.contact', 'uses' => function () {
            return view('templates/mug-hotel/contact');
        }]);
        Route::get('/about', ['as' => 'temp.mug-hotel.about', 'uses' => function () {
            return view('templates/mug-hotel/about');
        }]);
    });
    //Fitness Freak
    Route::group(['prefix' => 'fitness-freak'], function () {
        Route::get('/', ['as' => 'temp.fitness-freak.index', 'uses' => function () {
            return view('templates/fitness-freak/index', ['check' => true]);
        }]);
    });
    //Befit
    Route::group(['prefix' => 'befit'], function () {
        Route::get('/', ['as' => 'temp.befit.index', 'uses' => function () {
            return view('templates/befit/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.befit.about', 'uses' => function () {
            return view('templates/befit/about', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.befit.gallery', 'uses' => function () {
            return view('templates/befit/gallery', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.befit.contact', 'uses' => function () {
            return view('templates/befit/contact', ['check' => false]);
        }]);
        Route::get('/blog', ['as' => 'temp.befit.blog', 'uses' => function () {
            return view('templates/befit/blog', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.befit.single', 'uses' => function () {
            return view('templates/befit/single', ['check' => false]);
        }]);
    });
    //Fit Pro
    Route::group(['prefix' => 'fit-pro'], function () {
        Route::get('/', ['as' => 'temp.fit-pro.index', 'uses' => function () {
            return view('templates/fit-pro/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.fit-pro.about', 'uses' => function () {
            return view('templates/fit-pro/about', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.fit-pro.contact', 'uses' => function () {
            return view('templates/fit-pro/contact', ['check' => false]);
        }]);
        Route::get('/blog', ['as' => 'temp.fit-pro.blog', 'uses' => function () {
            return view('templates/fit-pro/blog', ['check' => false]);
        }]);
        Route::get('/404', ['as' => 'temp.fit-pro.404', 'uses' => function () {
            return view('templates/fit-pro/404', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.fit-pro.single', 'uses' => function () {
            return view('templates/fit-pro/single', ['check' => false]);
        }]);
        Route::get('/trainers', ['as' => 'temp.fit-pro.trainers', 'uses' => function () {
            return view('templates/fit-pro/trainers', ['check' => false]);
        }]);
    });
    //Yoga Lite
    Route::group(['prefix' => 'yoga-lite'], function () {
        Route::get('/', ['as' => 'temp.yoga-lite.index', 'uses' => function () {
            return view('templates/yoga-lite/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.yoga-lite.about', 'uses' => function () {
            return view('templates/yoga-lite/about', ['check' => false]);
        }]);
        Route::get('/events', ['as' => 'temp.yoga-lite.events', 'uses' => function () {
            return view('templates/yoga-lite/events', ['check' => false]);
        }]);
        Route::get('/login', ['as' => 'temp.yoga-lite.login', 'uses' => function () {
            return view('templates/yoga-lite/login', ['check' => false]);
        }]);
        Route::get('/register', ['as' => 'temp.yoga-lite.register', 'uses' => function () {
            return view('templates/yoga-lite/register', ['check' => false]);
        }]);
        Route::get('/service', ['as' => 'temp.yoga-lite.service', 'uses' => function () {
            return view('templates/yoga-lite/services', ['check' => false]);
        }]);
        Route::get('/single', ['as' => 'temp.yoga-lite.single', 'uses' => function () {
            return view('templates/yoga-lite/single', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.yoga-lite.contact', 'uses' => function () {
            return view('templates/yoga-lite/contact', ['check' => false]);
        }]);
    });
    //Child care
    Route::group(['prefix' => 'child-care'], function () {
        Route::get('/', ['as' => 'temp.child-care.index', 'uses' => function () {
            return view('templates/child-care/index');
        }]);
    });
    //Hotel Deluxe
    Route::group(['prefix' => 'hotel-deluxe'], function () {
        Route::get('/', ['as' => 'temp.hotel-deluxe.index', 'uses' => function () {
            return view('templates/hotel-deluxe/index');
        }]);
        Route::get('/rooms', ['as' => 'temp.hotel-deluxe.rooms', 'uses' => function () {
            return view('templates/hotel-deluxe/rooms');
        }]);
        Route::get('/news', ['as' => 'temp.hotel-deluxe.news', 'uses' => function () {
            return view('templates/hotel-deluxe/news');
        }]);
        Route::get('/gallery', ['as' => 'temp.hotel-deluxe.gallery', 'uses' => function () {
            return view('templates/hotel-deluxe/gallery');
        }]);
        Route::get('/contact', ['as' => 'temp.hotel-deluxe.contact', 'uses' => function () {
            return view('templates/hotel-deluxe/contact');
        }]);
        Route::get('/single', ['as' => 'temp.hotel-deluxe.single', 'uses' => function () {
            return view('templates/hotel-deluxe/single');
        }]);
        Route::get('/404', ['as' => 'temp.hotel-deluxe.404', 'uses' => function () {
            return view('templates/hotel-deluxe/404');
        }]);
    });
    //Clinic
    Route::group(['prefix' => 'clinic'], function () {
        Route::get('/', ['as' => 'temp.clinic.index', 'uses' => function () {
            return view('templates/clinic/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.clinic.about', 'uses' => function () {
            return view('templates/clinic/about', ['check' => false]);
        }]);
        Route::get('/appointment', ['as' => 'temp.clinic.appointment', 'uses' => function () {
            return view('templates/clinic/appointment', ['check' => false]);
        }]);
        Route::get('/departments', ['as' => 'temp.clinic.departments', 'uses' => function () {
            return view('templates/clinic/departments', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.clinic.gallery', 'uses' => function () {
            return view('templates/clinic/gallery', ['check' => false]);
        }]);
        Route::get('/mail', ['as' => 'temp.clinic.mail', 'uses' => function () {
            return view('templates/clinic/mail', ['check' => false]);
        }]);
    });
    //Hotels Starter
    Route::group(['prefix' => 'hotels-starter'], function () {
        Route::get('/', ['as' => 'temp.hotels-starter.index', 'uses' => function () {
            return view('templates/hotels-starter/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.hotels-starter.about', 'uses' => function () {
            return view('templates/hotels-starter/about', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.hotels-starter.contact', 'uses' => function () {
            return view('templates/hotels-starter/contact', ['check' => false]);
        }]);
        Route::get('/services', ['as' => 'temp.hotels-starter.services', 'uses' => function () {
            return view('templates/hotels-starter/services', ['check' => false]);
        }]);
    });
    //Best-Pet
    Route::group(['prefix' => 'best-pet'], function () {
        Route::get('/', ['as' => 'temp.best-pet.index', 'uses' => function () {
            return view('templates/best-pet/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.best-pet.about', 'uses' => function () {
            return view('templates/best-pet/about', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.best-pet.contact', 'uses' => function () {
            return view('templates/best-pet/contact', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.best-pet.gallery', 'uses' => function () {
            return view('templates/best-pet/gallery', ['check' => false]);
        }]);
    });
    //Pet-Sitter
    Route::group(['prefix' => 'pet-sitter'], function () {
        Route::get('/', ['as' => 'temp.pet-sitter.index', 'uses' => function () {
            return view('templates/pet-sitter/index');
        }]);
        Route::get('/about', ['as' => 'temp.pet-sitter.about', 'uses' => function () {
            return view('templates/pet-sitter/about');
        }]);
        Route::get('/contact', ['as' => 'temp.pet-sitter.contact', 'uses' => function () {
            return view('templates/pet-sitter/contact');
        }]);
        Route::get('/services', ['as' => 'temp.pet-sitter.services', 'uses' => function () {
            return view('templates/pet-sitter/services');
        }]);
    });
    //Pet-Sitter
    Route::group(['prefix' => 'cat-life'], function () {
        Route::get('/', ['as' => 'temp.cat-life.index', 'uses' => function () {
            return view('templates/cat-life/index');
        }]);
    });
    //Cat-Club
    Route::group(['prefix' => 'cat-club'], function () {
        Route::get('/', ['as' => 'temp.cat-club.index', 'uses' => function () {
            return view('templates/cat-club/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.cat-club.about', 'uses' => function () {
            return view('templates/cat-club/about', ['check' => false, 'text' => 'Về Chúng Tôi']);
        }]);
        Route::get('/blog', ['as' => 'temp.cat-club.blog', 'uses' => function () {
            return view('templates/cat-club/blog', ['check' => false, 'text' => 'Blog']);
        }]);
        Route::get('/contact', ['as' => 'temp.cat-club.contact', 'uses' => function () {
            return view('templates/cat-club/contact', ['check' => false, 'text' => 'Liên Hệ']);
        }]);
        Route::get('/gallery', ['as' => 'temp.cat-club.gallery', 'uses' => function () {
            return view('templates/cat-club/gallery', ['check' => false, 'text' => 'Bộ Sưu Tập']);
        }]);
        Route::get('/single', ['as' => 'temp.cat-club.single', 'uses' => function () {
            return view('templates/cat-club/single', ['check' => false, 'text' => 'Tin Tức']);
        }]);
    });

    //health Plus
    Route::group(['prefix' => 'health-plus'], function () {
        Route::get('/', ['as' => 'temp.health-plus.index', 'uses' => function () {
            return view('templates/health-plus/index');
        }]);
        Route::get('/about', ['as' => 'temp.health-plus.about', 'uses' => function () {
            return view('templates/health-plus/about');
        }]);
        Route::get('/contact', ['as' => 'temp.health-plus.contact', 'uses' => function () {
            return view('templates/health-plus/contact');
        }]);
        Route::get('/gallery', ['as' => 'temp.health-plus.gallery', 'uses' => function () {
            return view('templates/health-plus/gallery');
        }]);
        Route::get('/appointment', ['as' => 'temp.health-plus.appointment', 'uses' => function () {
            return view('templates/health-plus/appointment');
        }]);
        Route::get('/single', ['as' => 'temp.health-plus.single', 'uses' => function () {
            return view('templates/health-plus/single');
        }]);
    });

    //Detal Health
    Route::group(['prefix' => 'dental-health'], function () {
        Route::get('/', ['as' => 'temp.detal-health.index', 'uses' => function () {
            return view('templates/dental-health/index');
        }]);
        Route::get('/about', ['as' => 'temp.detal-health.about', 'uses' => function () {
            return view('templates/dental-health/about');
        }]);
        Route::get('/services', ['as' => 'temp.detal-health.services', 'uses' => function () {
            return view('templates/dental-health/services');
        }]);
        Route::get('/gallery', ['as' => 'temp.detal-health.gallery', 'uses' => function () {
            return view('templates/dental-health/gallery');
        }]);
        Route::get('/blog', ['as' => 'temp.detal-health.blog', 'uses' => function () {
            return view('templates/dental-health/blog');
        }]);
        Route::get('/contact', ['as' => 'temp.detal-health.contact', 'uses' => function () {
            return view('templates/dental-health/contact');
        }]);
        Route::get('/single', ['as' => 'temp.detal-health.single', 'uses' => function () {
            return view('templates/dental-health/single');
        }]);
    });
    //Carserving
    Route::group(['prefix' => 'carserving'], function () {
        Route::get('/', ['as' => 'temp.carserving.index', 'uses' => function () {
            return view('templates/carserving/index');
        }]);
        Route::get('/about', ['as' => 'temp.carserving.about', 'uses' => function () {
            return view('templates/carserving/about');
        }]);
        Route::get('/contact', ['as' => 'temp.carserving.contact', 'uses' => function () {
            return view('templates/carserving/contact');
        }]);
        Route::get('/services', ['as' => 'temp.carserving.services', 'uses' => function () {
            return view('templates/carserving/services');
        }]);
    });
    //Car-Clean
    Route::group(['prefix' => 'car-clean'], function () {
        Route::get('/', ['as' => 'temp.car-clean.index', 'uses' => function () {
            return view('templates/car-clean/index');
        }]);
    });
    //Auto-Car
    Route::group(['prefix' => 'auto-car'], function () {
        Route::get('/', ['as' => 'temp.auto-car.index', 'uses' => function () {
            return view('templates/auto-car/index', ['check' => true]);
        }]);
        Route::get('/about', ['as' => 'temp.auto-car.about', 'uses' => function () {
            return view('templates/auto-car/about', ['check' => false]);
        }]);
        Route::get('/services', ['as' => 'temp.auto-car.services', 'uses' => function () {
            return view('templates/auto-car/services', ['check' => false]);
        }]);
        Route::get('/contact', ['as' => 'temp.auto-car.contact', 'uses' => function () {
            return view('templates/auto-car/contact', ['check' => false]);
        }]);
        Route::get('/gallery', ['as' => 'temp.auto-car.gallery', 'uses' => function () {
            return view('templates/auto-car/gallery', ['check' => false]);
        }]);
    });
    //Auto-Show
    Route::group(['prefix' => 'auto-show'], function () {
        Route::get('/', ['as' => 'temp.auto-show.index', 'uses' => function () {
            return view('templates/auto-show/index');
        }]);
        Route::get('/contact', ['as' => 'temp.auto-show.contact', 'uses' => function () {
            return view('templates/auto-show/contact');
        }]);
        Route::get('/brands', ['as' => 'temp.auto-show.brands', 'uses' => function () {
            return view('templates/auto-show/brands');
        }]);
        Route::get('/single', ['as' => 'temp.auto-show.single', 'uses' => function () {
            return view('templates/auto-show/single');
        }]);
        Route::get('/models', ['as' => 'temp.auto-show.models', 'uses' => function () {
            return view('templates/auto-show/models');
        }]);
    });
});
