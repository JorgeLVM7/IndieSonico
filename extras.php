Schema::create('users', function (Blueprint $table) {
$table->increments('id');
$table->string('name');
$table->string('email')->unique();
$table->string('password');
$table->text('level');
$table->text('last_name');
$table->text('user');
$table->rememberToken();
$table->timestamps();
});