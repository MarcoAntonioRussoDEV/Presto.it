<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
   public function index()
   {
      $article_to_check = Article::where([
         ['is_accepted', "=", null],
         ['user_id', "!=", Auth::user()->id]
         ])->first();
      return view('revisor.index', compact('article_to_check'));
   }
   public function accept(Article $article)
   {
      $article->setAccepted(true);
      return redirect()
         ->back()
         ->with('info', __('ui.youAcceptedTheArticle') ." " . '"' .  strtoupper($article->title) . '"')
         ->with(compact('article'));
   }
   public function reject(Article $article)
   {
      $article->setAccepted(false);
      return redirect()
         ->back()
         ->with('info', __('ui.youRejectedTheArticle') ." " . '"' .  strtoupper($article->title) . '"')
         ->with(compact('article'));
         
   }

   public function restoreLastArticle(Article $article){
      $article->setAccepted(null);
      return redirect()
         ->back();
         // ->with('success', "Hai ripristinato l'articolo " . '"' .  strtoupper($this->last_article->title) . '"');
   }
   

   public function becomeRevisor(){
      $user = Auth::user();

      if(!$user->reviewer_requested){

         Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
         $user->reviewer_requested = true;
         $user->save();
         return redirect()->back()->with('success', __('ui.congratulationsYouHaveAppliedToBecomeAReviewer'));
      }
         return redirect()->back()->with('error', __('ui.attentionYouHaveAlreadyRequestedToBecomeAReviewer'));

   }
   public function makeRevisor(User $user){
      Artisan::call('app:make-user-revisor',['email'=>$user->email]);
      return redirect()->back();
   }


}
