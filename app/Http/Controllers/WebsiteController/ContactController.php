<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Models\FooterDetail;
use App\Rules\NoUrl;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7\Request as Psr7Request;

class ContactController extends Controller
{
    public function contact(){
        $footer = FooterDetail::find(1);
        return view('website.contact', compact('footer'));
    }

    public function contactPost(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => ['required','Max:200', 'string', new NoUrl],
        ]);

        $contact = new ContactForm;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','Message sent successfully');
    }

    public function contactDetails(){
        $message = ContactForm::paginate(8);

        return view('admin.contact-details', compact('message'));
    }

    
    public function contactDelete($id){
        ContactForm::find($id)->delete();
        return redirect()->back()->with('success','Message delete successfully');
    }

    public function contactShow(Request $request){
        {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('contact_forms')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('message', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('contact_forms')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->message.'</td>
         <td>'.$row->created_at.'</td>
         <td><a href="'.route('contact-delete', $row->id).'" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</a></td>
        
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
}
    

