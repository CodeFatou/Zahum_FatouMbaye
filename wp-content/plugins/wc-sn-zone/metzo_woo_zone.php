<?php
/**
 * Plugin Name: Senegal Cities for Woocommerce
 * Plugin URI: https://creationdesolutions.com/sn-zone-woocommerce-plugin/
 * Author: Mouhamed Gueye
 * Author URI: https://creationdesolutions.com
 * Description: Add shipping zones Senegal Cities for Woocommerce.
 * Version: 0.1.1
 * License: GPLv2+
 * Min WP Version: 3.0
 * Max WP Version: 5.8
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: 2lsw
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'sn_cities_for_woocommerce' );

function sn_cities_for_woocommerce( $states ) {

    $map = array();

    $cities = array(
    	'SN001' => array(
            'city'     => 'Dakar',
            'division' => 'Almadies',
        ),
        'SN002' => array(
            'city'     => 'Dakar',
            'division' => 'Castor',
        ),
        'SN003' => array(
            'city'     => 'Dakar',
            'division' => 'Cité Biagui',
        ),
        'SN004' => array(
            'city'     => 'Dakar',
            'division' => 'Cité Keur Gorgui',
        ),
        'SN005' => array(
            'city'     => 'Dakar',
            'division' => 'Cité Mixta',
        ),
        'SN006' => array(
            'city'     => 'Dakar',
            'division' => 'Cité Tobago',
        ),
        'SN007' => array(
            'city'     => 'Dakar',
            'division' => 'Diamalaye',
        ),
        'SN008' => array(
            'city'     => 'Dakar',
            'division' => 'Djily Mbaye',
        ),
        'SN009' => array(
            'city'     => 'Dakar',
            'division' => 'Fann',
        ),
        'SN010' => array(
            'city'     => 'Dakar',
            'division' => 'Fass',
        ),
        'SN011' => array(
            'city'     => 'Dakar',
            'division' => 'Ouest Foire',
        ),
        'SN012' => array(
            'city'     => 'Dakar',
            'division' => 'Nord Foire',
        ),
        'SN013' => array(
            'city'     => 'Dakar',
            'division' => 'Sud Foire',
        ),
        'SN014' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Foire',
        ),
        'SN015' => array(
            'city'     => 'Dakar',
            'division' => 'Foire',
        ),
        'SN016' => array(
            'city'     => 'Dakar',
            'division' => 'Gueule Tapée',
        ),
        'SN017' => array(
            'city'     => 'Dakar',
            'division' => 'Patte Doie',
        ),
        'SN018' => array(
            'city'     => 'Dakar',
            'division' => 'Mamelles',
        ),

        'SN019' => array(
            'city'     => 'Dakar',
            'division' => 'Plateau',
        ),
        'SN020' => array(
            'city'     => 'Dakar',
            'division' => 'Pikine'
        ),
        'SN021' => array(
            'city'     => 'Dakar',
            'division' => 'Guediawaye'
        ),
        'SN022' => array(
            'city'     => 'Dakar',
            'division' => 'Keur Massar'
        ),
        'SN023' => array(
            'city'     => 'Dakar',
            'division' => 'Rufisque'
        ),
        'SN024' => array(
            'city'     => 'Dakar',
            'division' => 'Diamniadio'
        ),
        'SN025' => array(
            'city'     => 'Dakar',
            'division' => 'Bargny'
        ),
        'SN026' => array(
            'city'     => 'Dakar',
            'division' => 'Sebikotane'
        ),

		'SN027' => array(
            'city'     => 'Dakar',
            'division' => 'Yeumbeul'
        ),
        'SN028' => array(
            'city'     => 'Dakar',
            'division' => 'Malika'
        ),
        'SN029' => array(
            'city'     => 'Dakar',
            'division' => 'Sodida'
        ),
        'SN030' => array(
            'city'     => 'Dakar',
            'division' => 'Wakhinane Nimzatt'
        ),
        'SN031' => array(
            'city'     => 'Dakar',
            'division' => 'Thiaroye'
        ),
        'SN032' => array(
            'city'     => 'Dakar',
            'division' => 'Diamaguene'
        ),
        'SN033' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Mbao'
        ),
        'SN034' => array(
            'city'     => 'Dakar',
            'division' => 'Fass Mbao'
        ),
        'SN035' => array(
            'city'     => 'Dakar',
            'division' => 'Petit Mbao'
        ),
        'SN036' => array(
            'city'     => 'Dakar',
            'division' => 'Zac Mbao'
        ),
        'SN037' => array(
            'city'     => 'Dakar',
            'division' => 'Grand Mbao'
        ),
        'SN038' => array(
            'city'     => 'Dakar',
            'division' => 'Keur Mbaye Fall'
        ),
        'SN039' => array(
            'city'     => 'Dakar',
            'division' => 'Yene'
        ),

        'SN040' => array(
            'city'     => 'Dakar',
            'division' => 'Parcelles'
        ),
        'SN041' => array(
            'city'     => 'Dakar',
            'division' => 'Nord Foire'
        ),
        'SN042' => array(
            'city'     => 'Dakar',
            'division' => ' Yoff'
        ),
        'SN043' => array(
            'city'     => 'Dakar',
            'division' => 'Ouakam'
        ),

        'SN044' => array(
            'city'     => 'Dakar',
            'division' => 'Médina'
        ),
        'SN045' => array(
            'city'     => 'Dakar',
            'division' => 'Gibraltar'
        ),
        'SN046' => array(
            'city'     => 'Dakar',
            'division' => 'Colobane'
        ),
        'SN047' => array(
            'city'     => 'Dakar',
            'division' => 'Hlm'
        ),
        'SN048' => array(
            'city'     => 'Dakar',
            'division' => 'zone de Captage'
        ),

        'SN049' => array(
            'city'     => 'Dakar',
            'division' => 'Bel Air'
        ),
        'SN050' => array(
            'city'     => 'Dakar',
            'division' => 'Mariste'
        ),
        'SN051' => array(
            'city'     => 'Dakar',
            'division' => 'Point E'
        ),
        'SN052' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 1'
        ),
        'SN053' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 2'
        ),
        'SN053' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 3'
        ),
        'SN054' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 4'
        ),
        'SN055' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 5'
        ),
        'SN056' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap Liberté 6'
        ),
        'SN057' => array(
            'city'     => 'Dakar',
            'division' => 'Amitié 1'
        ),
        'SN058' => array(
            'city'     => 'Dakar',
            'division' => 'Amitié 2'
        ),
        'SN059' => array(
            'city'     => 'Dakar',
            'division' => 'Dieupeul Derklé'
        ),
        'SN060' => array(
            'city'     => 'Dakar',
            'division' => 'Hlm Grand Yoff'
        ),
        'SN061' => array(
            'city'     => 'Dakar',
            'division' => 'Grand Yoff'
        ),
        'SN062' => array(
            'city'     => 'Dakar',
            'division' => 'Mermoz'
        ),
        'SN063' => array(
            'city'     => 'Dakar',
            'division' => 'Sacre Coeur 1'
        ),
        'SN064' => array(
            'city'     => 'Dakar',
            'division' => 'Sacre Coeur 2'
        ),
        'SN065' => array(
            'city'     => 'Dakar',
            'division' => 'Sacre Coeur 3'
        ),
        'SN066' => array(
            'city'     => 'Dakar',
            'division' => 'Dalifort'
        ),
        'SN067' => array(
            'city'     => 'Dakar',
            'division' => 'Camberene'
        ),
        'SN068' => array(
            'city'     => 'Dakar',
            'division' => 'Golf'
        ),
        'SN069' => array(
            'city'     => 'Dakar',
            'division' => 'Cite Aliou Sow'
        ),






        'SN1001' => array(
            'city'     => 'Diourbel',
            'division' => 'Diourbel'
        ),
        'SN1002' => array(
            'city'     => 'Diourbel',
            'division' => 'Mbacké'
        ),
        'SN1003' => array(
            'city'     => 'Diourbel',
            'division' => 'Touba'
        ),
        'SN1004' => array(
            'city'     => 'Fatick',
            'division' => 'Fatick'
        ),
        'SN11005' => array(
            'city'     => 'Kaffrine',
            'division' => 'Kaffrine'
        ),
        'SN1006' => array(
            'city'     => 'Kedougou',
            'division' => 'Kedougou'
        ),
        'SN1007' => array(
            'city'     => 'Kaolack',
            'division' => 'Kaolack'
        ),
        'SN1008' => array(
            'city'     => 'Kolda',
            'division' => 'Kolda'
        ),
        'SN1009' => array(
            'city'     => 'Louga',
            'division' => 'Louga'
        ),
        'SN1010' => array(
            'city'     => 'Matam',
            'division' => 'Matam'
        ),
        'SN1011' => array(
            'city'     => 'Saint Louis',
            'division' => 'Saint Louis'
        ),
        'SN1012' => array(
            'city'     => 'Sediou',
            'division' => 'Sediou'
        ),
        'SN1013' => array(
            'city'     => 'Tambacounda',
            'division' => 'Tambacounda'
        ),
        'SN1014' => array(
            'city'     => 'Thies',
            'division' => 'Thies'
        ),
        'SN1015' => array(
            'city'     => 'Thies',
            'division' => 'Tivaouane'
        ),
        'SN1016' => array(
            'city'     => 'Thies',
            'division' => 'Mbour'
        ),
        'SN1017' => array(
            'city'     => 'Ziguinchor',
            'division' => 'Ziguinchor'
        ),
        


    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['SN'] = $map;
    
    return $states;
}