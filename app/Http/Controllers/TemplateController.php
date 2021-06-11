<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index($type)
    {
        if ($type == 'thiet-ke-website-giao-duc') {
            $data['text'] = 'giáo dục';
            $data['img_mainbanner'] = '/img/watch/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/watch/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/watch/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/watch/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/watch/mastery.jpg';
            $data['img_maintheme2'] = '/img/watch/skill.jpg';
            $data['img_maintheme3'] = '/img/watch/learning.jpg';
            $data['img_maintheme4'] = '/img/watch/edulearn.jpg';
            $data['href1'] = '/kho-giao-dien/mastery';
            $data['href2'] = '/kho-giao-dien/skill';
            $data['href3'] = '/kho-giao-dien/learning';
            $data['href4'] = '/kho-giao-dien/edulearn';
            $data['sub1'] = 'Mastery';
            $data['sub2'] = 'Skill';
            $data['sub3'] = 'Learning';
            $data['sub4'] = 'Edu Learn';
        } else if ($type == 'thiet-ke-website-thoi-trang') {
            $data['text'] = 'thời trang';
            $data['img_mainbanner'] = '/img/fashion/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/fashion/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/fashion/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/fashion/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/fashion/theFashionHub.jpg';
            $data['img_maintheme2'] = '/img/fashion/theDownyShoes.jpg';
            $data['img_maintheme3'] = '/img/fashion/theEliteShoppy.jpg';
            $data['img_maintheme4'] = '/img/fashion/theClassicStyle.jpg';
            $data['href1'] = '/kho-giao-dien/fashion-hub';
            $data['href2'] = '/kho-giao-dien/downyshoes';
            $data['href3'] = '/kho-giao-dien/eliteshoppy';
            $data['href4'] = '/kho-giao-dien/classicstyle';
            $data['sub1'] = 'Fashion Hub';
            $data['sub2'] = 'Downy Shoes';
            $data['sub3'] = 'Elite Shoppy';
            $data['sub4'] = 'Classic Style';
        } else if ($type == 'thiet-ke-website-lam-dep') {
            $data['text'] = 'làm đẹp';
            $data['img_mainbanner'] = '/img/cosmetic/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/cosmetic/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/cosmetic/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/cosmetic/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/cosmetic/beautyspa.jpg';
            $data['img_maintheme2'] = '/img/cosmetic/pedicure.jpg';
            $data['img_maintheme3'] = '/img/cosmetic/menspa.jpg';
            $data['img_maintheme4'] = '/img/cosmetic/hairsalon.jpg';
            $data['href1'] = '/kho-giao-dien/beautyspa';
            $data['href2'] = '/kho-giao-dien/pedicure';
            $data['href3'] = '/kho-giao-dien/menspa';
            $data['href4'] = '/kho-giao-dien/hairsalon';
            $data['sub1'] = 'The Beauty Spa';
            $data['sub2'] = 'Peridure Beauty Spa';
            $data['sub3'] = 'Men Spa';
            $data['sub4'] = 'Hair Salon';
        } else if ($type == 'thiet-ke-website-khach-san') {
            $data['text'] = 'khách sạn';
            $data['img_mainbanner'] = '/img/phone/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/phone/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/phone/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/phone/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/themes/luxus.jpg';
            $data['img_maintheme2'] = '/img/themes/mug-hotel.jpg';
            $data['img_maintheme3'] = '/img/themes/hotel-deluxe.jpg';
            $data['img_maintheme4'] = '/img/themes/hotels-starter.jpg';
            $data['href1'] = '/kho-giao-dien/luxus';
            $data['href2'] = '/kho-giao-dien/mug-hotel';
            $data['href3'] = '/kho-giao-dien/hotel-deluxe';
            $data['href4'] = '/kho-giao-dien/hotels-starter';
            $data['sub1'] = 'Luxus';
            $data['sub2'] = 'Mug Hotel';
            $data['sub3'] = 'Hotel Deluxe';
            $data['sub4'] = 'Hotels Starter';
        } else if ($type == 'thiet-ke-website-gym') {
            $data['text'] = 'gym';
            $data['img_mainbanner'] = '/img/electronic/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/electronic/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/electronic/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/electronic/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/electronic/yoga-lite.jpg';
            $data['img_maintheme2'] = '/img/electronic/befit.jpg';
            $data['img_maintheme3'] = '/img/electronic/fitness-freak.jpg';
            $data['img_maintheme4'] = '/img/electronic/fit-pro.jpg';
            $data['href1'] = '/kho-giao-dien/yoga-lite';
            $data['href2'] = '/kho-giao-dien/befit';
            $data['href3'] = '/kho-giao-dien/fitness-freak';
            $data['href4'] = '/kho-giao-dien/fit-pro';
            $data['sub1'] = 'Yoga Lite';
            $data['sub2'] = 'Befit';
            $data['sub3'] = 'Fitness Freak';
            $data['sub4'] = 'Fit Pro';
        } else if ($type == 'thiet-ke-website-thu-cung') {
            $data['text'] = 'thú cưng';
            $data['img_mainbanner'] = '/img/family/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/family/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/family/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/family/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/family/best-pet.jpg';
            $data['img_maintheme2'] = '/img/family/pet-sitter.jpg';
            $data['img_maintheme3'] = '/img/family/cat-life.jpg';
            $data['img_maintheme4'] = '/img/family/cat-club.jpg';
            $data['href1'] = '/kho-giao-dien/best-pet';
            $data['href2'] = '/kho-giao-dien/pet-sitter';
            $data['href3'] = '/kho-giao-dien/cat-life';
            $data['href4'] = '/kho-giao-dien/cat-club';
            $data['sub1'] = 'Best Pet';
            $data['sub2'] = 'Pet Sitter';
            $data['sub3'] = 'Cat Life';
            $data['sub4'] = 'Cat Club';
        } else if ($type == 'thiet-ke-website-noi-that') {
            $data['text'] = 'nội thất';
            $data['img_mainbanner'] = '/img/furniture/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/furniture/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/furniture/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/furniture/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/furniture/interior-home.jpg';
            $data['img_maintheme2'] = '/img/furniture/lighting.jpg';
            $data['img_maintheme3'] = '/img/furniture/inwardly.jpg';
            $data['img_maintheme4'] = '/img/furniture/amenity.jpg';
            $data['href1'] = '/kho-giao-dien/interior-home';
            $data['href2'] = '/kho-giao-dien/lighting';
            $data['href3'] = '/kho-giao-dien/inwardly';
            $data['href4'] = '/kho-giao-dien/amenity';
            $data['sub1'] = 'Interior Home';
            $data['sub2'] = 'Lighting';
            $data['sub3'] = 'Inwardly';
            $data['sub4'] = 'Amenity';
        } else if ($type == 'thiet-ke-website-suc-khoe') {
            $data['text'] = 'sức khỏe';
            $data['img_mainbanner'] = '/img/jewelry/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/jewelry/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/jewelry/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/jewelry/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/jewelry/child-care.jpg';
            $data['img_maintheme2'] = '/img/jewelry/clinic.jpg';
            $data['img_maintheme3'] = '/img/jewelry/health-plus.jpg';
            $data['img_maintheme4'] = '/img/jewelry/dental-health.jpg';
            $data['href1'] = '/kho-giao-dien/child-care';
            $data['href2'] = '/kho-giao-dien/clinic';
            $data['href3'] = '/kho-giao-dien/health-plus';
            $data['href4'] = '/kho-giao-dien/dental-health';
            $data['sub1'] = 'Child Care';
            $data['sub2'] = 'New Clinic';
            $data['sub3'] = 'Health Plus';
            $data['sub4'] = 'Dental Health';
        } else if ($type == 'thiet-ke-website-xe-cung') {
            $data['text'] = 'xế cưng';
            $data['img_mainbanner'] = '/img/book/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/book/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/book/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/book/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/book/carserving.jpg';
            $data['img_maintheme2'] = '/img/book/car-clean.jpg';
            $data['img_maintheme3'] = '/img/book/auto-car.jpg';
            $data['img_maintheme4'] = '/img/book/auto-show.jpg';
            $data['href1'] = '/kho-giao-dien/carserving';
            $data['href2'] = '/kho-giao-dien/car-clean';
            $data['href3'] = '/kho-giao-dien/auto-car';
            $data['href4'] = '/kho-giao-dien/auto-show';
            $data['sub1'] = 'Carserving';
            $data['sub2'] = 'Car Clean';
            $data['sub3'] = 'Auto Car';
            $data['sub4'] = 'Auto Show';
        } else if ($type == 'thiet-ke-website-nha-hang') {
            $data['text'] = 'nhà hàng';
            $data['img_mainbanner'] = '/img/company/mainbanner.jpg';
            $data['img_infowatch1'] = '/img/company/infowatch1.jpg';
            $data['img_infowatch2'] = '/img/company/infowatch2.jpg';
            $data['img_infowatch3'] = '/img/company/infowatch3.jpg';
            $data['img_maintheme1'] = '/img/themes/baking.jpg';
            $data['img_maintheme2'] = '/img/themes/cake-bakery.jpg';
            $data['img_maintheme3'] = '/img/themes/tasty-burger.jpg';
            $data['img_maintheme4'] = '/img/themes/food-chef.jpg';
            $data['href1'] = '/kho-giao-dien/baking';
            $data['href2'] = '/kho-giao-dien/cake-bakery';
            $data['href3'] = '/kho-giao-dien/tasty-burger';
            $data['href4'] = '/kho-giao-dien/food-chef';
            $data['sub1'] = 'Baking';
            $data['sub2'] = 'Cake Bakery';
            $data['sub3'] = 'Tasty Burger';
            $data['sub4'] = 'Food Chef';
        }
        return view('layouts/template/index', [
            'data' => $data
        ]);
    }

    public function price()
    {
        return view('layouts/price/index');
    }
}
