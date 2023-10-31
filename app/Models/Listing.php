<?php
  namespace App\Models;
  class Listing{
    public static function all(){
      return [
          [
          'id' => 1,
          'title' => 'Listing One',
          'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quod magnam impedit repellendus at aliquid laboriosam eligendi earum, consequatur voluptatem ullam adipisci delectus, vero sit illo in temporibus officia facilis.
          '
          ],
          [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. ebitis quod magnam impedit repellendus at aliquid laboriosam eligendi earum, consequatur voluptatem ullam adipisci delectus, vero sit illo in temporibus officia facilis.
          '
          ]
        ];
    }

    public static function find($id){
      $listings = self::all();

      foreach($listings as $listing){
        if($listing['id'] == $id){
          return $listing;
        }
      }
    }
  }