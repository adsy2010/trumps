<?php

namespace Database\Seeders;

use App\Models\TrumpCard;
use Illuminate\Database\Seeder;

class TrumpCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = ['f1_trumps' =>
            ['trump_set_id'=>1,'name' => 'HAMILTON Lewis'],
            ['trump_set_id'=>1,'name' => 'SCHUMACHER Michael'],
            ['trump_set_id'=>1,'name' => 'VETTEL Sebastian'],
            ['trump_set_id'=>1,'name' => 'PROST Alain'],
            ['trump_set_id'=>1,'name' => 'SENNA Ayrton'],
            ['trump_set_id'=>1,'name' => 'ALONSO Fernando'],
            ['trump_set_id'=>1,'name' => 'MANSELL Nigel'],
            ['trump_set_id'=>1,'name' => 'STEWART Jackie'],
            ['trump_set_id'=>1,'name' => 'CLARK Jim'],
            ['trump_set_id'=>1,'name' => 'LAUDA Niki'],
            ['trump_set_id'=>1,'name' => 'FANGIO Juan Manuel'],
            ['trump_set_id'=>1,'name' => 'PIQUET Nelson'],
            ['trump_set_id'=>1,'name' => 'ROSBERG Nico'],
            ['trump_set_id'=>1,'name' => 'HILL Damon'],
            ['trump_set_id'=>1,'name' => 'RAIKKONEN Kimi'],
            ['trump_set_id'=>1,'name' => 'HAKKINEN Mika'],
            ['trump_set_id'=>1,'name' => 'MOSS Stirling'],
            ['trump_set_id'=>1,'name' => 'BUTTON Jenson'],
            ['trump_set_id'=>1,'name' => 'HILL Graham'],
            ['trump_set_id'=>1,'name' => 'BRABHAM Jack'],
            ['trump_set_id'=>1,'name' => 'FITTIPALDI Emerson'],
            ['trump_set_id'=>1,'name' => 'ASCARI Alberto'],
            ['trump_set_id'=>1,'name' => 'COULTHARD David'],
            ['trump_set_id'=>1,'name' => 'ANDRETTI Mario'],
            ['trump_set_id'=>1,'name' => 'REUTEMANN Carlos'],
            ['trump_set_id'=>1,'name' => 'JONES Alan'],
            ['trump_set_id'=>1,'name' => 'VILLENEUVE Jacques'],
            ['trump_set_id'=>1,'name' => 'MASSA Felipe'],
            ['trump_set_id'=>1,'name' => 'BARRICHELLO Rubens'],
            ['trump_set_id'=>1,'name' => 'VERSTAPPEN Max'],
            ['trump_set_id'=>1,'name' => 'HUNT James'],
            ['trump_set_id'=>1,'name' => 'PETERSON Ronnie'],
            ['trump_set_id'=>1,'name' => 'SCHECKTER Jody'],
            ['trump_set_id'=>1,'name' => 'BERGER Gerhard'],
            ['trump_set_id'=>1,'name' => 'WEBBER Mark'],
            ['trump_set_id'=>1,'name' => 'BOTTAS Valtteri'],
            ['trump_set_id'=>1,'name' => 'ICKX Jacky'],
            ['trump_set_id'=>1,'name' => 'HULME Denny'],
            ['trump_set_id'=>1,'name' => 'ARNOUX René'],
            ['trump_set_id'=>1,'name' => 'MONTOYA Juan-Pablo'],
            ['trump_set_id'=>1,'name' => 'RICCIARDO Daniel'],
            ['trump_set_id'=>1,'name' => 'BROOKS Tony'],
            ['trump_set_id'=>1,'name' => 'SURTEES John'],
            ['trump_set_id'=>1,'name' => 'RINDT Jochen'],
            ['trump_set_id'=>1,'name' => 'VILLENEUVE Gilles'],
            ['trump_set_id'=>1,'name' => 'LAFFITE Jacques'],
            ['trump_set_id'=>1,'name' => 'PATRESE Riccardo'],
            ['trump_set_id'=>1,'name' => 'SCHUMACHER Ralf'],
            ['trump_set_id'=>1,'name' => 'FARINA Giuseppe'],
            ['trump_set_id'=>1,'name' => 'REGAZZONI Clay'],
            ['trump_set_id'=>1,'name' => 'WATSON John'],
            ['trump_set_id'=>1,'name' => 'ALBORETO Michele'],
            ['trump_set_id'=>1,'name' => 'ROSBERG Keke'],
            ['trump_set_id'=>1,'name' => 'GURNEY Dan'],
            ['trump_set_id'=>1,'name' => 'McLAREN Bruce'],
            ['trump_set_id'=>1,'name' => 'IRVINE Eddie'],
            ['trump_set_id'=>1,'name' => 'HAWTHORN Mike'],
            ['trump_set_id'=>1,'name' => 'COLLINS Peter'],
            ['trump_set_id'=>1,'name' => 'HILL Phil'],
            ['trump_set_id'=>1,'name' => 'PIRONI Didier'],
            ['trump_set_id'=>1,'name' => 'BOUTSEN Thierry'],
            ['trump_set_id'=>1,'name' => 'FRENTZEN Heinz-Harald'],
            ['trump_set_id'=>1,'name' => 'HERBERT Johnny'],
            ['trump_set_id'=>1,'name' => 'FISICHELLA Giancarlo'],
            ['trump_set_id'=>1,'name' => 'VUKOVICH Bill'],
            ['trump_set_id'=>1,'name' => 'GONZALEZ Jose-Froilan'],
            ['trump_set_id'=>1,'name' => 'TRINTIGNANT Maurice'],
            ['trump_set_id'=>1,'name' => 'von TRIPS Wolfgang'],
            ['trump_set_id'=>1,'name' => 'RODRIGUEZ Pedro'],
            ['trump_set_id'=>1,'name' => 'SIFFERT Jo'],
            ['trump_set_id'=>1,'name' => 'REVSON Peter'],
            ['trump_set_id'=>1,'name' => 'DEPAILLER Patrick'],
            ['trump_set_id'=>1,'name' => 'JABOUILLE Jean-Pierre'],
            ['trump_set_id'=>1,'name' => 'TAMBAY Patrick'],
            ['trump_set_id'=>1,'name' => 'De ANGELIS Elio'],
            ['trump_set_id'=>1,'name' => 'LECLERC Charles'],
            ['trump_set_id'=>1,'name' => 'PARSONS Johnnie'],
            ['trump_set_id'=>1,'name' => 'WALLARD Lee'],
            ['trump_set_id'=>1,'name' => 'FAGIOLI Luigi'],
            ['trump_set_id'=>1,'name' => 'TARUFFI Piero'],
            ['trump_set_id'=>1,'name' => 'RUTTMAN Troy'],
            ['trump_set_id'=>1,'name' => 'SWEIKERT Bob'],
            ['trump_set_id'=>1,'name' => 'MUSSO Luigi'],
            ['trump_set_id'=>1,'name' => 'FLAHERTY Pat'],
            ['trump_set_id'=>1,'name' => 'HANKS Sam'],
            ['trump_set_id'=>1,'name' => 'BRYAN Jimmy'],
            ['trump_set_id'=>1,'name' => 'WARD Rodger'],
            ['trump_set_id'=>1,'name' => 'BONNIER Jo'],
            ['trump_set_id'=>1,'name' => 'RATHMANN Jim'],
            ['trump_set_id'=>1,'name' => 'BAGHETTI Giancarlo'],
            ['trump_set_id'=>1,'name' => 'IRELAND Innes'],
            ['trump_set_id'=>1,'name' => 'BANDINI Lorenzo'],
            ['trump_set_id'=>1,'name' => 'GINTHER Richie'],
            ['trump_set_id'=>1,'name' => 'SCARFIOTTI Ludovico'],
            ['trump_set_id'=>1,'name' => 'GETHIN Peter'],
            ['trump_set_id'=>1,'name' => 'CEVERT François'],
            ['trump_set_id'=>1,'name' => 'BELTOISE Jean-Pierre'],
            ['trump_set_id'=>1,'name' => 'PACE Carlos'],
            ['trump_set_id'=>1,'name' => 'MASS Jochen'],
            ['trump_set_id'=>1,'name' => 'BRAMBILLA Vittorio'],
            ['trump_set_id'=>1,'name' => 'NILSSON Gunnar'],
            ['trump_set_id'=>1,'name' => 'NANNINI Alessandro'],
            ['trump_set_id'=>1,'name' => 'ALESI Jean'],
            ['trump_set_id'=>1,'name' => 'PANIS Olivier'],
            ['trump_set_id'=>1,'name' => 'TRULLI Jarno'],
            ['trump_set_id'=>1,'name' => 'KUBICA Robert'],
            ['trump_set_id'=>1,'name' => 'KOVALAINEN Heikki'],
            ['trump_set_id'=>1,'name' => 'MALDONADO Pastor'],
            ['trump_set_id'=>1,'name' => 'GASLY Pierre'],
            ['trump_set_id'=>1,'name' => 'PEREZ Sergio'],
            ['trump_set_id'=>1,'name' => 'HEIDFELD Nick'],
            ['trump_set_id'=>1,'name' => 'JOHANSSON Stefan'],
            ['trump_set_id'=>1,'name' => 'AMON Chris'],
            ['trump_set_id'=>1,'name' => 'GROSJEAN Romain'],
            ['trump_set_id'=>1,'name' => 'BEHRA Jean'],
            ['trump_set_id'=>1,'name' => 'CHEEVER Eddie'],
            ['trump_set_id'=>1,'name' => 'BRUNDLE Martin'],
            ['trump_set_id'=>1,'name' => 'VILLORESI Luigi'],
            ['trump_set_id'=>1,'name' => 'De CESARIS Andrea'],
            ['trump_set_id'=>1,'name' => 'WARWICK Derek'],
            ['trump_set_id'=>1,'name' => 'CASTELLOTTI Eugenio'],
            ['trump_set_id'=>1,'name' => 'GREGORY Masten'],
            ['trump_set_id'=>1,'name' => 'MAGGS Tony'],
            ['trump_set_id'=>1,'name' => 'JARIER Jean-Pierre'],
            ['trump_set_id'=>1,'name' => 'CAPELLI Ivan'],
            ['trump_set_id'=>1,'name' => 'BLUNDELL Mark'],
            ['trump_set_id'=>1,'name' => 'WURZ Alexander'],
            ['trump_set_id'=>1,'name' => 'GLOCK Timo'],
            ['trump_set_id'=>1,'name' => 'KVYAT Daniil'],
            ['trump_set_id'=>1,'name' => 'STROLL Lance'],
            ['trump_set_id'=>1,'name' => 'ROSIER Louis'],
            ['trump_set_id'=>1,'name' => 'FISCHER Rudi'],
            ['trump_set_id'=>1,'name' => 'BONETTO Felice'],
            ['trump_set_id'=>1,'name' => 'McGRATH Jack'],
            ['trump_set_id'=>1,'name' => 'MANZON Robert'],
            ['trump_set_id'=>1,'name' => 'MARIMON Onofre'],
            ['trump_set_id'=>1,'name' => 'MAGLIOLI Umberto'],
            ['trump_set_id'=>1,'name' => 'KLING Karl'],
            ['trump_set_id'=>1,'name' => 'PERDISA Cesare'],
            ['trump_set_id'=>1,'name' => 'SCHELL Harry'],
            ['trump_set_id'=>1,'name' => 'SALVADORI Roy'],
            ['trump_set_id'=>1,'name' => 'LEWIS-EVANS Stuart'],
            ['trump_set_id'=>1,'name' => 'GENDEBIEN Olivier'],
            ['trump_set_id'=>1,'name' => 'ARUNDELL Peter'],
            ['trump_set_id'=>1,'name' => 'PARKES Mike'],
            ['trump_set_id'=>1,'name' => 'COURAGE Piers'],
            ['trump_set_id'=>1,'name' => 'OLIVER Jackie'],
            ['trump_set_id'=>1,'name' => 'HAILWOOD Mike'],
            ['trump_set_id'=>1,'name' => 'PRYCE Tom'],
            ['trump_set_id'=>1,'name' => 'STUCK Hans Joachim'],
            ['trump_set_id'=>1,'name' => 'FABI Teo'],
            ['trump_set_id'=>1,'name' => 'MODENA Stefano'],
            ['trump_set_id'=>1,'name' => 'VERSTAPPEN Jos'],
            ['trump_set_id'=>1,'name' => 'SALO Mika'],
            ['trump_set_id'=>1,'name' => 'SAINZ Carlos'],
            ['trump_set_id'=>1,'name' => 'ALBON Alexander'],
            ['trump_set_id'=>1,'name' => 'NORRIS Lando'],
            ['trump_set_id'=>1,'name' => 'PARNELL Reg'],
            ['trump_set_id'=>1,'name' => 'CHIRON Louis'],
            ['trump_set_id'=>1,'name' => 'HOLLAND Bill'],
            ['trump_set_id'=>1,'name' => 'ROSE Mauri'],
            ['trump_set_id'=>1,'name' => 'WHITEHEAD Peter'],
            ['trump_set_id'=>1,'name' => 'SERAFINI Dorino'],
            ['trump_set_id'=>1,'name' => 'AYULO Manuel'],
            ['trump_set_id'=>1,'name' => 'NAZARUK Mike'],
            ['trump_set_id'=>1,'name' => 'CROSS Art'],
            ['trump_set_id'=>1,'name' => 'CARTER Duane'],
            ['trump_set_id'=>1,'name' => 'HERRMANN Hans'],
            ['trump_set_id'=>1,'name' => 'DAVIES Jimmy'],
            ['trump_set_id'=>1,'name' => 'BETTENHAUSEN Tony'],
            ['trump_set_id'=>1,'name' => 'RUSSO Paul'],
            ['trump_set_id'=>1,'name' => 'FREELAND Don'],
            ['trump_set_id'=>1,'name' => 'FRERE Paul'],
            ['trump_set_id'=>1,'name' => 'de PORTAGO Alfonso'],
            ['trump_set_id'=>1,'name' => 'FLOCKHART Ron'],
            ['trump_set_id'=>1,'name' => 'MENDITEGUY Carlos'],
            ['trump_set_id'=>1,'name' => 'BOYD Johnny'],
            ['trump_set_id'=>1,'name' => 'AMICK George'],
            ['trump_set_id'=>1,'name' => 'THOMSON Johnny'],
            ['trump_set_id'=>1,'name' => 'ALLISON Cliff'],
            ['trump_set_id'=>1,'name' => 'GOLDSMITH Paul'],
            ['trump_set_id'=>1,'name' => 'MAIRESSE Willy'],
            ['trump_set_id'=>1,'name' => 'TAYLOR Trevor'],
            ['trump_set_id'=>1,'name' => 'ANDERSON Bob'],
            ['trump_set_id'=>1,'name' => 'SPENCE Mike'],
            ['trump_set_id'=>1,'name' => 'LOVE John'],
            ['trump_set_id'=>1,'name' => 'REDMAN Brian'],
            ['trump_set_id'=>1,'name' => 'BIANCHI Lucien'],
            ['trump_set_id'=>1,'name' => 'ATTWOOD Dick'],
            ['trump_set_id'=>1,'name' => 'SERVOZ-GAVIN Johnny'],
            ['trump_set_id'=>1,'name' => 'PESCAROLO Henri'],
            ['trump_set_id'=>1,'name' => 'STOMMELEN Rolf'],
            ['trump_set_id'=>1,'name' => 'WISELL Reine'],
            ['trump_set_id'=>1,'name' => 'SCHENKEN Tim'],
            ['trump_set_id'=>1,'name' => 'DONOHUE Mark'],
            ['trump_set_id'=>1,'name' => 'FOLLMER George'],
            ['trump_set_id'=>1,'name' => 'GIACOMELLI Bruno'],
            ['trump_set_id'=>1,'name' => 'STREIFF Philippe'],
            ['trump_set_id'=>1,'name' => 'GUGELMIN Mauricio'],
            ['trump_set_id'=>1,'name' => 'SUZUKI Aguri'],
            ['trump_set_id'=>1,'name' => 'MORENO Roberto'],
            ['trump_set_id'=>1,'name' => 'LEHTO JJ'],
            ['trump_set_id'=>1,'name' => 'ANDRETTI Michael'],
            ['trump_set_id'=>1,'name' => 'LARINI Nicola'],
            ['trump_set_id'=>1,'name' => 'BERNARD Eric'],
            ['trump_set_id'=>1,'name' => 'MORBIDELLI Gianni'],
            ['trump_set_id'=>1,'name' => 'SATO Takuma'],
            ['trump_set_id'=>1,'name' => 'MONTEIRO Tiago'],
            ['trump_set_id'=>1,'name' => 'de la ROSA Pedro'],
            ['trump_set_id'=>1,'name' => 'PIQUET Nelsinho'],
            ['trump_set_id'=>1,'name' => 'PETROV Vitaly'],
            ['trump_set_id'=>1,'name' => 'KOBAYASHI Kamui'],
            ['trump_set_id'=>1,'name' => 'MAGNUSSEN Kevin'],
            ['trump_set_id'=>1,'name' => 'OCON Esteban'],
        ];

        foreach ($cards as $card) {
            TrumpCard::create($card);
        }
    }
}