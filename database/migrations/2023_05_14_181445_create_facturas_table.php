<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_velneo');
            $table->text('serie')->nullable();
            $table->text('forma_pago')->nullable();
            $table->text('ruc_receptor')->nullable();
            $table->text('razon_social')->nullable();;
            $table->text('direccion')->nullable();
            $table->text('moneda')->nullable();
            $table->text('ruc_emisor')->nullable();
            $table->date('fecha')->default('2023-01-01');
            $table->text('serie_completa')->nullable();
            $table->bigInteger('num_doc')->default(0);
            $table->text('num_fact')->nullable();
            $table->text('obs')->nullable();
            $table->text('guia')->nullable();
            $table->text('detalle_sunat')->nullable();
            $table->decimal('bas_red')->default(0);
            $table->decimal('bas_sup')->default(0);
            $table->decimal('bas_tot')->default(0);
            $table->decimal('iva_gen')->default(0);
            $table->decimal('iva_tot')->default(0);
            $table->decimal('total_icbper')->default(0);
            $table->decimal('tot_fac')->default(0);
            $table->integer('motivos_nc')->default(1);
            $table->integer('motivos_nd')->default(1);
            $table->date('fecha_baja')->default('2000-01-01');
            $table->date('fecha_vencimiento')->default('2000-01-01');
            $table->string('url_pdf');
            $table->string('url_cdr');
            $table->string('url_xml');
            $table->string('url_txt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
