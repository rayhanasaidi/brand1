<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Category;
class HeaderComposer
{
public function compose(View $view)
 {
     $view->with('categories', Category::where('is_online',1)->get());
 }
}
