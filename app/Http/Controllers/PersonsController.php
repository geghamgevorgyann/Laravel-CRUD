<?php

namespace App\Http\Controllers;

use App\Interfaces\PersonsRepositoryInterface;
use App\Models\Persons;
use App\Http\Requests\StorePersonsRequest;
use App\Http\Requests\UpdatePersonsRequest;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;

class PersonsController extends Controller
{
    private PersonsRepositoryInterface $personsRepository;
    public function __construct(PersonsRepositoryInterface $personsRepository){
        $this->personsRepository = $personsRepository;
    }
    public function index()
    {
        $this->personsRepository->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonsRequest $request)
    {
        $person =[
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age
        ];
        DB::beginTransaction();
        try {
           $storePerson = $this->personsRepository->store($person);
           DB::commit();
              return ResponseClass::sendResponse(new Response($storePerson), 'Person Created Successfully', 201);
        } catch (\Exception $ex) {
            error_log($ex);
            return ResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Persons $persons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persons $persons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonsRequest $request, Persons $persons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persons $persons)
    {
        //
    }
}
