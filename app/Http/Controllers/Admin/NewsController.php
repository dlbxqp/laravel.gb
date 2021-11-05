<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller{
 public function getAllNews(){
  return view('admin.news.allNews', [
   'allNews' => $this->getNews()
  ]);
 }
 public function getOneNews(int $code){
  $news = $this->getNews()[$code] ?? abort(404);

  return view('admin.news.oneNews', [
   'oneNews' => $news
  ]);
 }

 public function getSections(){
  return view('admin.news.sections', [
   'sections' => $this->getNewsSections()
  ]);
 }
 public function getSection(int $id){
  $section = $this->getNewsSections()[$id] ?? abort(404);

  return view('admin.news.section', [
   'section' => $section
  ]);
 }

 public function create(){
  return 'Добавление новости';
 }

 public function store(Request $request){
  return "<h1>store</h1>";
 }

 public function show($id){
  return "<h1>show</h1>";
 }

 public function edit($id){
  return "<h1>edit</h1>";
 }

 public function update(Request $request, $id){
  return "<h1>update</h1>";
 }

 public function destroy($id){
  return "<h1>destroy</h1>";
 }
}
