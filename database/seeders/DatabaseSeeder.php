<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        //\App\Models\Ecoponto::factory(5)->create();

      /* DB::table('users')->insert(
            [
                [
                    'name' => 'Maytê Araújo',
                    'email' => 'maypg@bol.com.br',
                    'password' => '12345678',
                    'administrador' => '1',
                    'ecoponto' => '1',
                ],

                [
                    'name' => 'Rodrigo Salgado',
                    'email' => 'rodrigo@fatecpg.com.br',
                    'password' => '12345678',
                    'administrador' => '1',
                    'ecoponto' => '1',
                ],                
            ]
        );
*/

        DB::table('ecopontos')->insert(
            [
                [
                    'name' => 'Ecoponto Melvi',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontomelvi@praiagrande.sp.gov.br',
                    'address' => 'R. Leopoldo Augusto Miguez - Jardim Melvi, Praia Grande - SP, 11712-170',
                    'lat' => '-24.038931806102617', 
                    'lng' => '-46.52721499999999',
                ],
    
                [
                    'name' => 'Ecoponto Ribeirópolis',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoribeiropolis@praiagrande.sp.gov.br',
                    'address' => 'Av. Diamantino Cruz Ferreira Mourão - Ribeirópolis, Praia Grande - SP, 11714-630',
                    'lat' => '-24.02799700342083',
                    'lng' => '-46.507351158782065',
                ],
    
                [
                    'name' => 'Ecoponto Esmeralda',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoesmeralda@praiagrande.sp.gov.br',
                    'address' => 'Av. Ana Pereira da França, 35 - São José do Rio Preto, Praia Grande - SP, 11713-280',
                    'lat' => '-24.034376918195893',
                    'lng' => '-46.51383267412327',
                ],
    
                [
                    'name' => 'Ecoponto Canto do Forte',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoforte@praiagrande.sp.gov.br',
                    'address' => 'Rua Xixová, s/n - Canto do Forte, Praia Grande - SP, 11700-430',
                    'lat' => '-24.003783864970995',
                    'lng' => '-46.40094018116111',
                ],
    
                [
                    'name' => 'Ecoponto Boqueirão',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoboqueirao@praiagrande.sp.gov.br',
                    'address' => 'R. Guanabara - Boqueirão, Praia Grande - SP, 11700-030',
                    'lat'  => '-24.003346806199463',
                    'lng'  => '-46.412711046133424',
                ],
    
                [
                    'name' => 'Ecoponto Aviação',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoaviacao@praiagrande.sp.gov.br',
                    'address' => 'R. José Alves Maciel - Aviação, Praia Grande - SP, 11702-440',
                    'lat' => '-24.00028885024234',
                    'lng' => '-46.42850389275239',
                ],
        
                [
                    'name' => 'Ecoponto Sítio do Campo',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontositiocampo@praiagrande.sp.gov.br',
                    'address' => 'R. Saturnino de Brito - Sítio do Campo, Praia Grande - SP, 11725-160',
                    'lat'  => '-24.000367260276526',
                    'lng'  => '-46.42858972343861',
                ],
    
                [
                    'name' => 'Ecoponto Vila Sônia',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontovilasonia@praiagrande.sp.gov.br',
                    'address' =>'R. Arnaldo Augusto Batista - Vila Sonia, Praia Grande - SP, 11722-005' ,
                    'lat'  => '-24.000367260276526',
                    'lng'  => '-46.42858972343861',
                ],
            
                [
                    'name' => 'Ecoponto Antártica',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoantartica@praiagrande.sp.gov.br',
                    'address' => 'R. João Batista de Siqueira - Vila Sao Jorge, Praia Grande - SP, 11720-120',
                    'lat'  => '-24.004993367813153', 
                    'lng'  => '-46.45699968057766',
                ],
            
                [
                    'name' => 'Ecoponto Quietude',
                    'phone' => '(13) 3496-2000',
                    'email' => 'ecopontoquietude@praiagrande.sp.gov.br',
                    'address' => 'R. das Acácias - Quietude, Praia Grande - SP, 11718-140',
                    'lat' => '-46.477427384621755', 
                    'lng' => '-24.015891505895024',
                ],
            ]
        );

    }
}
