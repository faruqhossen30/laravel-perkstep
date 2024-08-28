<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioSection;
use Illuminate\Http\Request;

class PortfolioSectionController extends Controller
{
    public function portfolioSectionCreate($id)
    {
        $portfolio = Portfolio:: with('sections')->firstWhere('id', $id);
        // return $portfolio;
        return view('admin.portfolio.portfoliosection',compact('portfolio'));
    }

    public function portfolioSectionStore(Request $request ,$id){

        // return $request->all();
        $thumbnails = $request->file('thumbnail');
        $images = $request->images;
        // $title = $request->title;
        // $description = $request->description;

        // return $thumbnails;
        if (!empty($request->title)) {
            PortfolioSection::where('portfolio_id', $id)->delete();

            foreach ($request->title as $key => $title) {

                $file_name = null;
                if ($thumbnails && array_key_exists($key, $thumbnails)) {
                    $file_name = $request->file('thumbnail')[$key]->store('thumbnail/portfolio/');
                }elseif ($images && array_key_exists($key, $images)) {
                    $file_name = $images[$key];
                }

                // return $file_name;
                PortfolioSection::create([
                    'portfolio_id' => $id,
                    'title'        => $title,
                    'description'  => $request->description[$key],
                    'thumbnail'    => $file_name,
                ]);
            }
        }
        return redirect()->route('portfolio.index');
    }
}
