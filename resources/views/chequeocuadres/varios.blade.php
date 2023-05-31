
$table->Integer('codigo_caja');
$table->Integer('codigo_moneda');
$table->string('nombre_moneda', 30);
$table->string('nombre_cajera', 40);
$table->decimal('total_moneda', 14,2);
$table->date('fecha_dia');
