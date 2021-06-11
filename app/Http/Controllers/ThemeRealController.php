<?php

namespace App\Http\Controllers;

class ThemeRealController extends Controller
{
    public function index($type)
    {
        if ($type == 'bigstore') {
            $data['title'] = 'The Big Store';
            $data['link'] = '/temp/bigstore';
        } else if ($type == 'gococystore') {
            $data['title'] = 'Gococy Store';
            $data['link'] = '/temp/gorocystore';
        } else if ($type == 'fashion-hub') {
            $data['title'] = 'Fashion Hub';
            $data['link'] = '/temp/fashion-hub';
        } else if ($type == 'downyshoes') {
            $data['title'] = 'Downy Shoes';
            $data['link'] = '/temp/downyshoes';
        } else if ($type == 'eliteshoppy') {
            $data['title'] = 'Elite Shoppy';
            $data['link'] = '/temp/eliteshoppy';
        } else if ($type == 'classicstyle') {
            $data['title'] = 'Classic Style';
            $data['link'] = '/temp/classicstyle';
        } else if ($type == 'beautyspa') {
            $data['title'] = 'Beauty Spa';
            $data['link'] = '/temp/beautyspa';
        } else if ($type == 'pedicure') {
            $data['title'] = 'Pedicure Beauty Spa';
            $data['link'] = '/temp/pedicure';
        } else if ($type == 'menspa') {
            $data['title'] = 'Men Spa';
            $data['link'] = '/temp/menspa';
        } else if ($type == 'hairsalon') {
            $data['title'] = 'Hair Salon';
            $data['link'] = '/temp/hairsalon';
        } else if ($type == 'baking') {
            $data['title'] = 'Baking';
            $data['link'] = '/temp/baking';
        } else if ($type == 'cake-bakery') {
            $data['title'] = 'Cake Bakery';
            $data['link'] = '/temp/cake-bakery';
        } else if ($type == 'interior-home') {
            $data['title'] = 'Interior Home';
            $data['link'] = '/temp/interior-home';
        } else if ($type == 'lighting') {
            $data['title'] = 'Lighting';
            $data['link'] = '/temp/lighting';
        } else if ($type == 'tasty-burger') {
            $data['title'] = 'Tasty Burger';
            $data['link'] = '/temp/tasty-burger';
        } else if ($type == 'inwardly') {
            $data['title'] = 'Inwardly';
            $data['link'] = '/temp/inwardly';
        } else if ($type == 'amenity') {
            $data['title'] = 'Amenity';
            $data['link'] = '/temp/amenity';
        } else if ($type == 'villas') {
            $data['title'] = 'Villas';
            $data['link'] = '/temp/villas';
        } else if ($type == 'food-chef') {
            $data['title'] = 'Food Chef';
            $data['link'] = '/temp/food-chef';
        } else if ($type == 'luxus') {
            $data['title'] = 'Luxus';
            $data['link'] = '/temp/luxus';
        } else if ($type == 'mastery') {
            $data['title'] = 'Mastery';
            $data['link'] = '/temp/mastery';
        } else if ($type == 'skill') {
            $data['title'] = 'Skill';
            $data['link'] = '/temp/skill';
        } else if ($type == 'learning') {
            $data['title'] = 'Learning';
            $data['link'] = '/temp/learning';
        } else if ($type == 'edulearn') {
            $data['title'] = 'EduLearn';
            $data['link'] = '/temp/edulearn';
        } else if ($type == 'mug-hotel') {
            $data['title'] = 'Mug Hotel';
            $data['link'] = '/temp/mug-hotel';
        } else if ($type == 'fitness-freak') {
            $data['title'] = 'Fitness Freak';
            $data['link'] = '/temp/fitness-freak';
        } else if ($type == 'befit') {
            $data['title'] = 'Befit';
            $data['link'] = '/temp/befit';
        } else if ($type == 'fit-pro') {
            $data['title'] = 'Fit Pro';
            $data['link'] = '/temp/fit-pro';
        } else if ($type == 'yoga-lite') {
            $data['title'] = 'Yoga Lite';
            $data['link'] = '/temp/yoga-lite';
        } else if ($type == 'child-care') {
            $data['title'] = 'Child Care';
            $data['link'] = '/temp/child-care';
        } else if ($type == 'hotel-deluxe') {
            $data['title'] = 'Hotel Deluxe';
            $data['link'] = '/temp/hotel-deluxe';
        } else if ($type == 'clinic') {
            $data['title'] = 'New Clinic';
            $data['link'] = '/temp/clinic';
        } else if ($type == 'hotels-starter') {
            $data['title'] = 'Hotels Starter';
            $data['link'] = '/temp/hotels-starter';
        } else if ($type == 'best-pet') {
            $data['title'] = 'Best Pet';
            $data['link'] = '/temp/best-pet';
        } else if ($type == 'pet-sitter') {
            $data['title'] = 'Pet Sitter';
            $data['link'] = '/temp/pet-sitter';
        } else if ($type == 'cat-life') {
            $data['title'] = 'Cat Life';
            $data['link'] = '/temp/cat-life';
        }else if ($type == 'cat-club') {
            $data['title'] = 'Cat Club';
            $data['link'] = '/temp/cat-club';
        }else if ($type == 'health-plus') {
            $data['title'] = 'Health Plus';
            $data['link'] = '/temp/health-plus';
        }else if ($type == 'dental-health') {
            $data['title'] = 'Dental Health';
            $data['link'] = '/temp/dental-health';
        }else if ($type == 'carserving') {
            $data['title'] = 'Car Service';
            $data['link'] = '/temp/carserving';
        }else if ($type == 'car-clean') {
            $data['title'] = 'Car Clean';
            $data['link'] = '/temp/car-clean';
        }else if ($type == 'auto-car') {
            $data['title'] = 'Auto Car';
            $data['link'] = '/temp/auto-car';
        }else if ($type == 'auto-show') {
            $data['title'] = 'Auto Show';
            $data['link'] = '/temp/auto-show';
        }

        return view('layouts/themereal/index', [
            'data' => $data
        ]);
    }
}
