<?php
namespace App\Http\Controllers;

use Carbon\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController{
 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function getNews(): array{
  $faker = \Faker\Factory ::create();

  $data = [];
  for($id = 0; $id < 10; $id++){
   $data[] = [
    'id' => $id,
    'title' => $faker->title,
    'author' => $faker->userName(),
    'image' => null,
    'description' => $faker->sentence(10)
   ];
  }
  return $data;
 }

 public function getNewsSections(): array {
  $faker = \Faker\Factory::create();

  $data = [];
  for($id = 0; $id < 4; $id++){
   $data[] = [
    'id' => $id,
    'title' => $faker->title,
    'description' => $faker->sentence(32)
   ];
  }
  return $data;
 }
}
