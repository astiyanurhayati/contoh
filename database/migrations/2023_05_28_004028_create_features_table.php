    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->text('svg1');
            $table->string('judul1');
            $table->string('desk1');

            $table->text('svg2');
            $table->string('judul2');
            $table->string('desk2');

            $table->text('svg3');
            $table->string('judul3');
            $table->string('desk3');

            $table->text('svg4');
            $table->string('judul4');
            $table->string('desk4');

            $table->string('image')->nullable();

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
        Schema::dropIfExists('features');
    }
};
