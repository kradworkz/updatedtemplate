<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListDropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_dropdowns')->delete();
        
        \DB::table('list_dropdowns')->insert(array (
            0 => 
            array (
                'classification' => 'none',
                'color' => 'none',
                'id' => 1,
                'name' => 'none',
                'others' => 'none',
                'type' => 'none',
            ),
            1 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 2,
                'name' => 'Office of the Regional Director',
                'others' => 'ORD',
                'type' => 'Department',
            ),
            2 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 3,
                'name' => 'Finance, Administrative Support and Technical Services',
                'others' => 'FASTS',
                'type' => 'Department',
            ),
            3 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 4,
                'name' => 'Field Operations Services',
                'others' => 'FOS',
                'type' => 'Department',
            ),
            4 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 5,
                'name' => 'Regular Employee',
                'others' => 'Plantilla',
                'type' => 'Employment Status',
            ),
            5 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 6,
                'name' => 'Contractual of Service',
                'others' => 'Contractual',
                'type' => 'Employment Status',
            ),
            6 => 
            array (
                'classification' => 'Group',
                'color' => 'n/a',
                'id' => 7,
                'name' => 'Detailed',
                'others' => 'Detailed',
                'type' => 'Employment Status',
            ),
            7 => 
            array (
                'classification' => 'Office',
                'color' => 'RO-IX',
                'id' => 8,
                'name' => 'Regional Office',
                'others' => '',
                'type' => 'Regional Office',
            ),
            8 => 
            array (
                'classification' => 'Office',
                'color' => 'PSTC-ZDN',
                'id' => 9,
                'name' => 'Zamboanga Del Norte',
                'others' => '',
                'type' => 'Provincial S&T Center',
            ),
            9 => 
            array (
                'classification' => 'Office',
                'color' => 'PSTC-ZDS',
                'id' => 10,
                'name' => 'Zamboanga Del Sur',
                'others' => '',
                'type' => 'Provincial S&T Center',
            ),
            10 => 
            array (
                'classification' => 'Office',
                'color' => 'PSTC-ZSP',
                'id' => 11,
                'name' => 'Zamboanga Sibugay Province',
                'others' => '',
                'type' => 'Provincial S&T Center',
            ),
            11 => 
            array (
                'classification' => 'Office',
                'color' => 'CSTC-ZC/IC',
                'id' => 12,
                'name' => 'Zamboanga City / Isabela City',
                'others' => '',
                'type' => 'City S&T Center',
            ),
            12 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 13,
                'name' => '1',
                'others' => '14440.80',
                'type' => 'n/a',
            ),
            13 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 14,
                'name' => '2',
                'others' => '15348',
                'type' => 'n/a',
            ),
            14 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 15,
                'name' => '3',
                'others' => '16286.40',
                'type' => 'n/a',
            ),
            15 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 16,
                'name' => '4',
                'others' => '17280',
                'type' => 'n/a',
            ),
            16 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 17,
                'name' => '6',
                'others' => '19440',
                'type' => 'n/a',
            ),
            17 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 18,
                'name' => '7',
                'others' => '20614.80',
                'type' => 'n/a',
            ),
            18 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 19,
                'name' => '8',
                'others' => '21901.20',
                'type' => 'n/a',
            ),
            19 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 20,
                'name' => '9',
                'others' => '23462.40',
                'type' => 'n/a',
            ),
            20 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 21,
                'name' => '10',
                'others' => '25446',
                'type' => 'n/a',
            ),
            21 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 22,
                'name' => '11',
                'others' => '28652.40',
                'type' => 'n/a',
            ),
            22 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 23,
                'name' => '12',
                'others' => '31262.40',
                'type' => 'n/a',
            ),
            23 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 24,
                'name' => '13',
                'others' => '33931.20',
                'type' => 'n/a',
            ),
            24 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 25,
                'name' => '14',
                'others' => '36958.80',
                'type' => 'n/a',
            ),
            25 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 26,
                'name' => '15',
                'others' => '40290',
                'type' => 'n/a',
            ),
            26 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 27,
                'name' => '16',
                'others' => '43953.60',
                'type' => 'n/a',
            ),
            27 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 28,
                'name' => '17',
                'others' => '47983.20',
                'type' => 'n/a',
            ),
            28 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 29,
                'name' => '18',
                'others' => '52417.20',
                'type' => 'n/a',
            ),
            29 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 30,
                'name' => '19',
                'others' => '57975.60',
                'type' => 'n/a',
            ),
            30 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 31,
                'name' => '20',
                'others' => '65101.20',
                'type' => 'n/a',
            ),
            31 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 32,
                'name' => '21',
                'others' => '73081.20',
                'type' => 'n/a',
            ),
            32 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 33,
                'name' => '22',
                'others' => '82098',
                'type' => 'n/a',
            ),
            33 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 34,
                'name' => '23',
                'others' => '92288.40',
                'type' => 'n/a',
            ),
            34 => 
            array (
                'classification' => 'Salary',
                'color' => 'n/a',
                'id' => 35,
                'name' => '24',
                'others' => '104090.40',
                'type' => 'n/a',
            ),
        ));
        
        
    }
}