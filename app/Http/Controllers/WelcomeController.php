<?php namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Requests\PersonRequest;
use App\Http\Requests\MessageRequest;

use App\ec\entities\Person;
use App\ec\entities\Language;
use App\ec\entities\Group;
use App\ec\entities\Message;
use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function all()
	{
		//
		$persons = Person::all();
		return view('all', compact('persons'));
	}


	public function show($name)
	{
		//
		$persons = Person::where('name', 'LIKE', "%" . $name . "%")->get();
		return view('all', compact('persons'));
	}

	public function which_person()
	{
		//
		$languages = Language::all();
		return view('which_person', compact('persons', 'languages'));
	}

	public function which_person_go(PersonRequest $request)
	{
		//
		//$persons = Person::where('name', 'LIKE', "%" . $request->name . "%")->get();
		$persons = DB::table('people')
			->where('people.name', 'LIKE', "%" . $request->name . "%")
		    ->join('language_person', 'people.id', '=', 'language_person.person_id')
            ->join('languages', 'languages.id', '=', 'language_person.language_id')
            ->where('languages.name', '=', $request->wendy)
            ->where('people.age', '=', $request->age)
            ->select('people.*')
            ->get();		

		return view('all', compact('persons'));
	}

	public function which_person_id($id)
	{
		//
		
		$person = Person::find($id);
		return view('person', compact('person'));
	}

	public function which_language()
	{
		//
		$languages = Language::all();
		return view('which_language', compact('languages'));
	}

	public function which_language_go(PersonRequest $request)
	{
		//
		$persons = DB::table('people')
		    ->join('language_person', 'people.id', '=', 'language_person.person_id')
            ->join('languages', 'languages.id', '=', 'language_person.language_id')
            ->where('languages.name', '=', $request->wendy)
            ->select('people.*')
            ->get();		
		return view('all', compact('persons'));
	}

	public function which_age()
	{
		//
		return view('which_age', compact('persons'));
	}

	public function which_age_go(PersonRequest $request)
	{
		//
		$persons = Person::where('age', '=', $request->age)->get();
		return view('all', compact('persons'));
	}

	public function show_4_age($age)
	{
		//
		$persons = Person::where('age', '=', $age)->get();
		return view('all', compact('persons'));
	}

	public function show_4_language($language)
	{
		//
		$persons = DB::table('people')
		    ->join('language_person', 'people.id', '=', 'language_person.person_id')
            ->join('languages', 'languages.id', '=', 'language_person.language_id')
            ->where('languages.name', '=', $language)
            ->select('people.*')
            ->get();		
		return view('all', compact('persons'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store_group(GroupRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);
		$group = null;
		$group = Group::create([
			
			//"id" => 4,
			"name" => $request->group,
		]);
		//$persons = Person::wherein('id', array($))->get();
		$persons = Person::all();
		$members = array();
		foreach( $persons as $person ) {
		
			if ($request->has($person->name)) {
			
				$person->groups()->attach($group->id);
				array_push($members, $person);
			}
		} 
		return view('group', compact('group', 'members'));
	}

	public function write_message($id)
	{
		//
		
		$person = Person::find($id);
		return view('message', compact('person'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function send_message(MessageRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);
		$message = null;
		$message = Message::create([
			
			//"id" => 4,
			"subject" => $request->subject,
			"text" => $request->text,
		]);
		//$persons = Person::wherein('id', array($))->get();

				$person = Person::find($request->person);
				$person->messages()->attach($message->id);

		return view('message', compact('person'));
	}

}
