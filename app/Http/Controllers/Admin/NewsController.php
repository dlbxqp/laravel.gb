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
 public function editNews(int $code){
  $news = $this->getNews()[$code] ?? abort(404);

  return view('admin.news.editNews', [
   'oneNews' => $news
  ]);
 }

 public function getSections(){
  return view('admin.news.sections', [
   'sections' => $this->getNewsSections()
  ]);
 }
 public function editSection(int $id){
  $section = $this->getNewsSections()[$id] ?? abort(404);

  return view('admin.news.editSection', [
   'section' => $section
  ]);
 }

 public function newsStore(Request $request){
  //dd($request->except('_token'));
  if($request->input('type') == 'section'){
   $request->validate(['title' => ['required', 'string']]);
   $request->validate(['description' => ['required', 'string']]);

   \Storage::append('sections.json', json_encode($request->except('_token')));
  } else{
   $request->validate(['title' => ['required', 'string']]);
   $request->validate(['author' => ['required', 'string']]);
   $request->validate(['description' => ['required', 'string']]);

   \Storage::append('news.json', json_encode($request->except('_token')));
  }

  return response($request->except('_token'))->header('Content-type', 'text/html');
 }

 public function update(Request $request, $id){
  return "<h1>update</h1>";
 }

 public function destroy($id){
  return "<h1>destroy</h1>";
 }
}
