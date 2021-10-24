<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller{
 public function index(){
  return '!'; //view('index');
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
