<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller{
 public function getAllNews(){
  return view('news.allNews', [
   'allNews' => $this->getNews()
  ]);
 }
 public function getOneNews(int $code){
  $news = $this->getNews()[$code] ?? abort(404);

  return view('news.oneNews', [
   'oneNews' => $news
  ]);
 }

 public function getSections(){
  return view('news.sections', [
   'sections' => $this->getNewsSections()
  ]);
 }
 public function getSection(int $id){
  $section = $this->getNewsSections()[$id] ?? abort(404);

  return view('news.section', [
   'section' => $section
  ]);
 }
}
