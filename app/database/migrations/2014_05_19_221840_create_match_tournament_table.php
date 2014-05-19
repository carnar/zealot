<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchTournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('match_tournament', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('match_id')->unsigned()->index();
			$table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
			$table->integer('tournament_id')->unsigned()->index();
			$table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('match_tournament');
	}

}
