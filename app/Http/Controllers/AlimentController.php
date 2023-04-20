<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Aliment;
use App\Http\Requests;
class AlimentController extends Controller
{
 public function index(Request $request)
 {
 $aliments = Aliment::orderBy('nume','ASC')->paginate(10);
 $value=($request->input('page',1)-1)*5;
 return view('aliments.list',compact('aliments'))->with('i',$value);
 }
 public function create()
 {
 return view('aliments.create');
 }
 public function store(Request $request)
 {
 $this->validate($request, ['nume' => 'required','descriere' => 'required','pret' => 'required']);
 // create new task
 Aliment::create($request->all());
 return redirect()->route('aliments.index')->with('success', 'Your aliments added successfully!');
 }
 public function show($id)
 {
 $aliment = Aliment::find($id);
 return view('aliments.show',compact('aliment'));
 }
 public function edit($id)
 {
 $aliment = Aliment::find($id);
 return view('aliments.edit', compact('aliment'));
 }
 public function update(Request $request, $id)
 {
 $this->validate($request, [
 'nume' => 'required',
 'descriere' => 'required',
 'pret' => 'required'
 ]);
 Aliment::find($id)->update($request->all());
 return redirect()->route('aliments.index')->with('success','Aliment updated successfully');
 }
 public function destroy($id)
 {
 Aliment::find($id)->delete();
 return redirect()->route('aliments.index')->with('success','Aliment removed successfully');
 }
}