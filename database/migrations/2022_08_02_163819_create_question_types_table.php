<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\QuestionType;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
        });
        $this->create_types('Multiple Choice', 'Drop-Down', 'Checkboxes', 'Short answer', 'Paragraph');
    }
    private function create_types(string ...$types){
        foreach($types as $type){
            $model = new  QuestionType();
            $model->setAttribute('type',$type);
            $model->save();
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_types');
    }
};
