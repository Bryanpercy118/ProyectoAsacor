<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    //Inicio de la Prueba #1
                    ->assertSee('Login')                                        ->pause(2000)
                    ->type(field:'email',value:'admin@gmail.com')               ->pause(2000)
                    ->type(field:'password',value:'123456789')                  ->pause(2000)
                    ->click(selector:'button[type="submit"]')                   ->pause(2000)
                    ->assertPathIs(path:'/home')                                ->pause(2000)
                    ->clicklink(link:'Clientes')                                ->pause(3000)
                    ->clicklink(link:'Registrar Cliente')                       ->pause(5000)
                    ->type(field:'name',value:'Peter Parker')                   ->pause(2000)
                    ->type(field:'phone',value:'3203456271')                    ->pause(2000)
                    ->type(field:'address',value:'Clle 32 #25-33')              ->pause(2000)
                    ->type(field:'email',value:'ppp@gamil.com')                 ->pause(2000)
                    ->press('.btn.btn-success')                                 ->pause(4000)
                    ->clicklink(link:'Clientes')                                ->pause(2000)
                    ->clicklink(link:'Clientes Registrados')                    ->pause(7000)
                    //Alcance de la Prueba #1
                    //Inicio de la Prueba #2
                    ->clicklink(link:'Productos')                               ->pause(3000)
                    ->clicklink(link:'Registrar Producto')                      ->pause(4000)
                    ->type(field:'name',value:'Jeans Clasicos')                 ->pause(2000)
                    ->type(field:'price',value:'3500')                          ->pause(2000)
                    ->press('.btn.btn-success')                                 ->pause(4000)
                    ->clicklink(link:'Productos')                               ->pause(3000)
                    ->clicklink(link:'Productos Registrados')                   ->pause(7000)
                    //Alcance de la Prueba #2
                    //Inicio de la Prueba #3
                    ->clicklink(link:'Home')                                     ->pause(3000)
                    ->clicklink(link:'Venta')                                    ->pause(4000)
                    ->clicklink(link:'Generar Venta')                            ->pause(4000)
                    ->select('select[name="customer_id"]', '17')                 ->pause(4000)
                    ->select('select[name="products[]"]', '1')                   ->pause(4000)
                    ->press('.btn.btn-primary')                                  ->pause(4000)
                    ->clicklink(link:'Venta')                                    ->pause(4000)
                    ->clicklink(link:'Historial de Ventas')                      ->pause(4000)
                    ->clicklink(link:'Home')                                     ->pause(7000)
                    //Alcance de la Prueba #3


                    ;
        });
    }
}
