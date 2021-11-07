<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase{
 public function test_show_mainPage(){
  $response = $this->get('/');
  $response->assertStatus(200);
 }
 public function test_show_allNews(){
  $response = $this->get(route('news.allNews'));
  $response->assertStatus(200);
 }
 public function test_show_oneNews(){
  $response = $this->get(route('news.oneNews', ['id' => mt_rand(0, 9)]));
  $response->assertStatus(200);
 }
 public function test_show_sections(){
  $response = $this->get(route('news.sections'));
  $response->assertStatus(200);
 }
 public function test_show_section(){
  $response = $this->get(route('news.section', ['id' => mt_rand(0, 3)]));
  $response->assertStatus(200);
 }

 public function test_show_aPage(){
  $response = $this->get('/a/');
  $response->assertStatus(200);
 }
 public function test_show_admin_allNews(){
  $response = $this -> get(route('admin.news.allNews'));
  $response -> assertStatus(200);
 }
 public function test_show_admin_editNews(){
  $response = $this->get(route('admin.news.editNews', ['id' => mt_rand(0, 9)]));
  $response->assertStatus(200);
 }
 public function test_show_admin_sections(){
  $response = $this->get(route('admin.news.sections'));
  $response->assertStatus(200);
 }
 public function test_show_admin_editSection(){
  $response = $this->get(route('admin.news.editSection', ['id' => mt_rand(0, 3)]));
  $response->assertStatus(200);
 }
}
