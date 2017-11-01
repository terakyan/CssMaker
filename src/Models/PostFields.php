<?php

namespace Terakyan\Blog\Models;


use Sahakavatar\Cms\Models\Templates\Units;
use Sahakavatar\Settings\Repository\AdminsettingRepository;

class PostFields
{
    private static $settings;

    public function __construct(AdminsettingRepository $adminsettingRepository)
    {
        self::$settings = $adminsettingRepository;
    }

    public static function register($variation)
    {
        $data = self::all();
        $unit = Units::findByVariation($variation);
        if($unit && isset($unit->tags) && array_search("blog_field", $unit->tags) > -1){
            if(! isset($data[$variation])){
                $data[$variation] = $variation;
                self::$settings->updateSystemSettings($data,"blog");
            }
        }
    }

    public static function delete($variation)
    {
        $data = self::all();

        if(isset($data[$variation])){
            unset($data[$variation]);
            self::$settings->updateSystemSettings($data,"blog");
        }
    }

    public static function all()
    {
        $object = self::$settings->findBy('section','blog');
        if($object && $object->val){
            return json_decode($object->val,true);
        }

        return [];
    }
}
