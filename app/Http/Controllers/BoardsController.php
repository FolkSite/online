<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Boards;

    class BoardsController extends Controller {

        /**
         * Вывод списка объявлений
         * 
         * @return Response
         */
        public function index() {
          $boards = Boards::all();
          return view('boards.index', compact('boards'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
          return view('projects.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */
        public function store() {
          //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Project $project
         * @return Response
         */
        public function show(Project $project) {
          return view('projects.show', compact('project'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Project $project
         * @return Response
         */
        public function edit(Project $project) {
          return view('projects.edit', compact('project'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Project $project
         * @return Response
         */
        public function update(Project $project) {
          //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Project $project
         * @return Response
         */
        public function destroy(Project $project) {
          //
        }

    }
    