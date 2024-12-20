<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesBrandSeeder extends Seeder
{
    public function run(): void
    {
        $vehicles = [
            ['type' => 'cars', 'name' => 'Agrale'],
            ['type' => 'cars', 'name' => 'Alfa Romeo'],
            ['type' => 'cars', 'name' => 'Acura'],
            ['type' => 'cars', 'name' => 'AM Gen'],
            ['type' => 'cars', 'name' => 'Asia Motors'],
            ['type' => 'cars', 'name' => 'ASTON MARTIN'],
            ['type' => 'cars', 'name' => 'Audi'],
            ['type' => 'cars', 'name' => 'Baby'],
            ['type' => 'cars', 'name' => 'BMW'],
            ['type' => 'cars', 'name' => 'BRM'],
            ['type' => 'cars', 'name' => 'Bugre'],
            ['type' => 'cars', 'name' => 'BYD'],
            ['type' => 'cars', 'name' => 'CAB Motors'],
            ['type' => 'cars', 'name' => 'Cadillac'],
            ['type' => 'cars', 'name' => 'Caoa Chery'],
            ['type' => 'cars', 'name' => 'Caoa Chery/Chery'],
            ['type' => 'cars', 'name' => 'CBT Jipe'],
            ['type' => 'cars', 'name' => 'CHANA'],
            ['type' => 'cars', 'name' => 'CHANGAN'],
            ['type' => 'cars', 'name' => 'Chrysler'],
            ['type' => 'cars', 'name' => 'Citroën'],
            ['type' => 'cars', 'name' => 'Cross Lander'],
            ['type' => 'cars', 'name' => 'D2D Motors'],
            ['type' => 'cars', 'name' => 'Daewoo'],
            ['type' => 'cars', 'name' => 'Daihatsu'],
            ['type' => 'cars', 'name' => 'DFSK'],
            ['type' => 'cars', 'name' => 'Dodge'],
            ['type' => 'cars', 'name' => 'EFFA'],
            ['type' => 'cars', 'name' => 'Engesa'],
            ['type' => 'cars', 'name' => 'Envemo'],
            ['type' => 'cars', 'name' => 'Ferrari'],
            ['type' => 'cars', 'name' => 'Fiat'],
            ['type' => 'cars', 'name' => 'Fibravan'],
            ['type' => 'cars', 'name' => 'Ford'],
            ['type' => 'cars', 'name' => 'FOTON'],
            ['type' => 'cars', 'name' => 'Fyber'],
            ['type' => 'cars', 'name' => 'GEELY'],
            ['type' => 'cars', 'name' => 'GM - Chevrolet'],
            ['type' => 'cars', 'name' => 'GREAT WALL'],
            ['type' => 'cars', 'name' => 'Gurgel'],
            ['type' => 'cars', 'name' => 'GWM'],
            ['type' => 'cars', 'name' => 'HAFEI'],
            ['type' => 'cars', 'name' => 'HITECH ELECTRIC'],
            ['type' => 'cars', 'name' => 'Honda'],
            ['type' => 'cars', 'name' => 'Hyundai'],
            ['type' => 'cars', 'name' => 'Isuzu'],
            ['type' => 'cars', 'name' => 'IVECO'],
            ['type' => 'cars', 'name' => 'JAC'],
            ['type' => 'cars', 'name' => 'Jaguar'],
            ['type' => 'cars', 'name' => 'Jeep'],
            ['type' => 'cars', 'name' => 'JINBEI'],
            ['type' => 'cars', 'name' => 'JPX'],
            ['type' => 'cars', 'name' => 'Kia Motors'],
            ['type' => 'cars', 'name' => 'Lada'],
            ['type' => 'cars', 'name' => 'LAMBORGHINI'],
            ['type' => 'cars', 'name' => 'Land Rover'],
            ['type' => 'cars', 'name' => 'Lexus'],
            ['type' => 'cars', 'name' => 'LIFAN'],
            ['type' => 'cars', 'name' => 'LOBINI'],
            ['type' => 'cars', 'name' => 'Lotus'],
            ['type' => 'cars', 'name' => 'Mahindra'],
            ['type' => 'cars', 'name' => 'Maserati'],
            ['type' => 'cars', 'name' => 'Matra'],
            ['type' => 'cars', 'name' => 'Mazda'],
            ['type' => 'cars', 'name' => 'Mclaren'],
            ['type' => 'cars', 'name' => 'Mercedes-Benz'],
            ['type' => 'cars', 'name' => 'Mercury'],
            ['type' => 'cars', 'name' => 'MG'],
            ['type' => 'cars', 'name' => 'MINI'],
            ['type' => 'cars', 'name' => 'Mitsubishi'],
            ['type' => 'cars', 'name' => 'Miura'],
            ['type' => 'cars', 'name' => 'Nissan'],
            ['type' => 'cars', 'name' => 'Peugeot'],
            ['type' => 'cars', 'name' => 'Plymouth'],
            ['type' => 'cars', 'name' => 'Pontiac'],
            ['type' => 'cars', 'name' => 'Porsche'],
            ['type' => 'cars', 'name' => 'RAM'],
            ['type' => 'cars', 'name' => 'RELY'],
            ['type' => 'cars', 'name' => 'Renault'],
            ['type' => 'cars', 'name' => 'Rolls-Royce'],
            ['type' => 'cars', 'name' => 'Rover'],
            ['type' => 'cars', 'name' => 'Saab'],
            ['type' => 'cars', 'name' => 'Saturn'],
            ['type' => 'cars', 'name' => 'Seat'],
            ['type' => 'cars', 'name' => 'SERES'],
            ['type' => 'cars', 'name' => 'SHINERAY'],
            ['type' => 'cars', 'name' => 'smart'],
            ['type' => 'cars', 'name' => 'SSANGYONG'],
            ['type' => 'cars', 'name' => 'Subaru'],
            ['type' => 'cars', 'name' => 'Suzuki'],
            ['type' => 'cars', 'name' => 'TAC'],
            ['type' => 'cars', 'name' => 'Toyota'],
            ['type' => 'cars', 'name' => 'Troller'],
            ['type' => 'cars', 'name' => 'Volvo'],
            ['type' => 'cars', 'name' => 'VW - VolksWagen'],
            ['type' => 'cars', 'name' => 'Wake'],
            ['type' => 'cars', 'name' => 'Walk'],
            ['type' => 'motorcycles', 'name' => 'ADLY'],
            ['type' => 'motorcycles', 'name' => 'AGRALE'],
            ['type' => 'motorcycles', 'name' => 'AMAZONAS'],
            ['type' => 'motorcycles', 'name' => 'APRILIA'],
            ['type' => 'motorcycles', 'name' => 'ATALA'],
            ['type' => 'motorcycles', 'name' => 'AVELLOZ'],
            ['type' => 'motorcycles', 'name' => 'BAJAJ'],
            ['type' => 'motorcycles', 'name' => 'BEE'],
            ['type' => 'motorcycles', 'name' => 'Benelli'],
            ['type' => 'motorcycles', 'name' => 'BETA'],
            ['type' => 'motorcycles', 'name' => 'BIMOTA'],
            ['type' => 'motorcycles', 'name' => 'BMW'],
            ['type' => 'motorcycles', 'name' => 'BRANDY'],
            ['type' => 'motorcycles', 'name' => 'BRAVA'],
            ['type' => 'motorcycles', 'name' => 'BRP'],
            ['type' => 'motorcycles', 'name' => 'BUELL'],
            ['type' => 'motorcycles', 'name' => 'BUENO'],
            ['type' => 'motorcycles', 'name' => 'BULL'],
            ['type' => 'motorcycles', 'name' => 'byCristo'],
            ['type' => 'motorcycles', 'name' => 'CAGIVA'],
            ['type' => 'motorcycles', 'name' => 'CALOI'],
            ['type' => 'motorcycles', 'name' => 'DAELIM'],
            ['type' => 'motorcycles', 'name' => 'DAFRA'],
            ['type' => 'motorcycles', 'name' => 'DAYANG'],
            ['type' => 'motorcycles', 'name' => 'DAYUN'],
            ['type' => 'motorcycles', 'name' => 'DERBI'],
            ['type' => 'motorcycles', 'name' => 'DUCATI'],
            ['type' => 'motorcycles', 'name' => 'EMME'],
            ['type' => 'motorcycles', 'name' => 'FEVER'],
            ['type' => 'motorcycles', 'name' => 'FOX'],
            ['type' => 'motorcycles', 'name' => 'FUSCO MOTOSEGURA'],
            ['type' => 'motorcycles', 'name' => 'FYM'],
            ['type' => 'motorcycles', 'name' => 'GARINNI'],
            ['type' => 'motorcycles', 'name' => 'GAS GAS'],
            ['type' => 'motorcycles', 'name' => 'GREEN'],
            ['type' => 'motorcycles', 'name' => 'HAOBAO'],
            ['type' => 'motorcycles', 'name' => 'HAOJUE'],
            ['type' => 'motorcycles', 'name' => 'HARLEY-DAVIDSON'],
            ['type' => 'motorcycles', 'name' => 'HARTFORD'],
            ['type' => 'motorcycles', 'name' => 'HERO'],
            ['type' => 'motorcycles', 'name' => 'HONDA'],
            ['type' => 'motorcycles', 'name' => 'HUSABERG'],
            ['type' => 'motorcycles', 'name' => 'HUSQVARNA'],
            ['type' => 'motorcycles', 'name' => 'INDIAN'],
            ['type' => 'motorcycles', 'name' => 'IROS'],
            ['type' => 'motorcycles', 'name' => 'JIAPENG VOLCANO'],
            ['type' => 'motorcycles', 'name' => 'JOHNNYPAG'],
            ['type' => 'motorcycles', 'name' => 'JONNY'],
            ['type' => 'motorcycles', 'name' => 'KAHENA'],
            ['type' => 'motorcycles', 'name' => 'KASINSKI'],
            ['type' => 'motorcycles', 'name' => 'KAWASAKI'],
            ['type' => 'motorcycles', 'name' => 'KTM'],
            ['type' => 'motorcycles', 'name' => 'KYMCO'],
            ['type' => 'motorcycles', 'name' => 'LANDUM'],
            ['type' => 'motorcycles', 'name' => "L'AQUILA"],
            ['type' => 'motorcycles', 'name' => 'LAVRALE'],
            ['type' => 'motorcycles', 'name' => 'LERIVO'],
            ['type' => 'motorcycles', 'name' => 'LIFAN'],
            ['type' => 'motorcycles', 'name' => 'Lon-V'],
            ['type' => 'motorcycles', 'name' => 'MAGRÃO TRICICLOS'],
            ['type' => 'motorcycles', 'name' => 'Malaguti'],
            ['type' => 'motorcycles', 'name' => 'MIZA'],
            ['type' => 'motorcycles', 'name' => 'MOTO GUZZ'],
            ['type' => 'motorcycles', 'name' => 'MOTOCAR'],
            ['type' => 'motorcycles', 'name' => 'MOTORINO'],
            ['type' => 'motorcycles', 'name' => 'MRX'],
            ['type' => 'motorcycles', 'name' => 'MV AGUSTA'],
            ['type' => 'motorcycles', 'name' => 'MVK'],
            ['type' => 'motorcycles', 'name' => 'NIU'],
            ['type' => 'motorcycles', 'name' => 'ORCA'],
            ['type' => 'motorcycles', 'name' => 'PEGASSI'],
            ['type' => 'motorcycles', 'name' => 'PEUGEOT'],
            ['type' => 'motorcycles', 'name' => 'PIAGGIO'],
            ['type' => 'motorcycles', 'name' => 'POLARIS'],
            ['type' => 'motorcycles', 'name' => 'REGAL RAPTOR'],
            ['type' => 'motorcycles', 'name' => 'RIGUETE'],
            ['type' => 'motorcycles', 'name' => 'Royal Enfield'],
            ['type' => 'motorcycles', 'name' => 'SANYANG'],
            ['type' => 'motorcycles', 'name' => 'SHINERAY'],
            ['type' => 'motorcycles', 'name' => 'SIAMOTO'],
            ['type' => 'motorcycles', 'name' => 'SUNDOWN'],
            ['type' => 'motorcycles', 'name' => 'SUPER SOCO'],
            ['type' => 'motorcycles', 'name' => 'SUZUKI'],
            ['type' => 'motorcycles', 'name' => 'TARGOS'],
            ['type' => 'motorcycles', 'name' => 'TIGER'],
            ['type' => 'motorcycles', 'name' => 'TRAXX'],
            ['type' => 'motorcycles', 'name' => 'TRIUMPH'],
            ['type' => 'motorcycles', 'name' => 'Ventane Motors'],
            ['type' => 'motorcycles', 'name' => 'VENTO'],
            ['type' => 'motorcycles', 'name' => 'VOLTZ'],
            ['type' => 'motorcycles', 'name' => 'WATTS'],
            ['type' => 'motorcycles', 'name' => 'WUYANG'],
            ['type' => 'motorcycles', 'name' => 'YAMAHA'],
            ['type' => 'motorcycles', 'name' => 'ZONTES'],
            ['type' => 'trucks', 'name' => 'AGRALE'],
            ['type' => 'trucks', 'name' => 'BEPOBUS'],
            ['type' => 'trucks', 'name' => 'CHEVROLET'],
            ['type' => 'trucks', 'name' => 'CICCOBUS'],
            ['type' => 'trucks', 'name' => 'DAF'],
            ['type' => 'trucks', 'name' => 'EFFA-JMC'],
            ['type' => 'trucks', 'name' => 'FIAT'],
            ['type' => 'trucks', 'name' => 'FORD'],
            ['type' => 'trucks', 'name' => 'FOTON'],
            ['type' => 'trucks', 'name' => 'GMC'],
            ['type' => 'trucks', 'name' => 'HYUNDAI'],
            ['type' => 'trucks', 'name' => 'IVECO'],
            ['type' => 'trucks', 'name' => 'JAC'],
            ['type' => 'trucks', 'name' => 'MAN'],
            ['type' => 'trucks', 'name' => 'MARCOPOLO'],
            ['type' => 'trucks', 'name' => 'MASCARELLO'],
            ['type' => 'trucks', 'name' => 'MAXIBUS'],
            ['type' => 'trucks', 'name' => 'MERCEDES-BENZ'],
            ['type' => 'trucks', 'name' => 'NAVISTAR'],
            ['type' => 'trucks', 'name' => 'NEOBUS'],
            ['type' => 'trucks', 'name' => 'PUMA-ALFA'],
            ['type' => 'trucks', 'name' => 'SAAB-SCANIA'],
            ['type' => 'trucks', 'name' => 'SCANIA'],
            ['type' => 'trucks', 'name' => 'SHACMAN'],
            ['type' => 'trucks', 'name' => 'SINOTRUK'],
            ['type' => 'trucks', 'name' => 'VOLKSWAGEN'],
            ['type' => 'trucks', 'name' => 'VOLVO'],
            ['type' => 'trucks', 'name' => 'WALKBUS'],
        ];

        DB::table('vehicles_brands')->insert($vehicles);

    }
}