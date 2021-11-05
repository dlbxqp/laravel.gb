<style>
#sidebar,
#sidebar > menu{
 display: flex; flex-direction: column
}
#sidebar{
 background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4));
 padding: 2px
}
#sidebar > menu{
 list-style-type: none
}

#sidebar li:not(:last-of-type){
 margin-bottom: 2px
}

#sidebar a{
 border: 1px solid white; border-radius: 2px;
 color: white; text-decoration: none; text-transform: uppercase;
 display: block;
 padding: 10px;
 white-space: nowrap
}
</style>

<aside id="sidebar">
 <menu>
  <li>
   <a href="{{route('admin.news.sections')}}">Разделы новостей</a>
  </li>
  <li>
   <a href="{{route('admin.news.allNews')}}">Новости</a>
  </li>
 </menu>
</aside>
